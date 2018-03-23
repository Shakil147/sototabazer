<?php

namespace App\Http\Controllers;
use App\Cetagory;
use App\Brand;
use App\Product;
use App\ProductCetagory;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function add_product(){
    	$allCetagory = Cetagory::where('publication_status',1)->get();
    	$allBrand = Brand::where('publication_status',1)->get();
    	return view('admin.product.addProduct',[
    		'allCetagory'=>$allCetagory,
    		'allBrand'=>$allBrand
    	]);
    }


    public function save_product(Request $request){

        /*return $request;*/
        $productImage = $request->file('product_main_image');
        if (isset($productImage)) {
           
        $imagename = 'main_'.'_'.time().'_'.$productImage->getClientOriginalName();
        $directory = 'product_image/';
        $productImage->move($directory,$imagename);
        $imageUrl = $directory.$imagename;
        }

    	$saveProduct = new Product;
    	$saveProduct->product_name = $request->product_name;
    	$saveProduct->category_id = $request->category_id;
    	$saveProduct->brand_id = $request->brand_id;
    	$saveProduct->product_price = $request->product_price;
    	$saveProduct->product_quantity = $request->product_quantity;
    	$saveProduct->product_size = $request->product_size;
    	$saveProduct->product_short_description = $request->product_short_description;
    	$saveProduct->product_long_description = $request->product_long_description;
        if (isset($imageUrl)) {
            $saveProduct->product_main_image = $imageUrl;
        }
    	$saveProduct->product_creater_id = $request->product_creater_id;
    	$saveProduct->publication_status = $request->publication_status;
    	$saveProduct->save();
        if ($request->hasFile('file')) {

            

             foreach ($request->file as $file) {
                $imagsename = 'other_'.'_'.time().'_'.$file->getClientOriginalName();
                $directory = 'product_image/';
                $file->move($directory,$imagsename);
                $imagesUrl = $directory.$imagsename;

                $saveProductImage = new ProductImage;
                $saveProductImage->product_id = $saveProduct->id;
                $saveProductImage->product_image = $imagesUrl;
                $saveProductImage->save();
            }
        }
    	return redirect()->back()->with('message','Product Saved');
    }

    public function menage_product(){

        $allProducts = DB::table('products')
            ->join('users', 'products.product_creater_id', '=', 'users.id')
            ->join('cetagories', 'products.category_id', '=', 'cetagories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*','cetagories.cetagory_name','users.name','brands.brands_name')
            ->orderBy('id', 'desc')->get();
            return view('admin.product.menageProduct',['allProducts'=>$allProducts]);
    }

    public function status_product($id){
        $procductById = Product::find($id);
        if($procductById->publication_status == 1){
            $procductById->publication_status = 0 ;
            $procductById->save();
            return redirect()->back()->with('message','Product Unpudlished');
        }
        else{
            $procductById->publication_status = 1 ;
            $procductById->save();
            return redirect()->back()->with('message','Product Pudlished');
        }
    }

    public function edit_product($id){
        $allCetagory = Cetagory::where('publication_status',1)->get();
        $allBrand = Brand::where('publication_status',1)->get();
        $procductById = Product::find($id);
        return view('admin.product.updateProduct',[
            'allCetagory'=>$allCetagory,
            'allBrand'=>$allBrand,
            'procductById'=>$procductById
        ]);
    }

    public function update_product(Request $request){
        $procductById = Product::find($request->id);

        $main_image= $request->file('product_main_image');
        if(isset($main_image)){
        $imageName = time() . '.' . $main_image->getClientOriginalExtension();
        $directory = 'product_image/';
        if($procductById->product_main_image){
        unlink($procductById->product_main_image);            
        }
        $main_image->move($directory,$imageName);
        $imageUrl = $directory.$imageName;
         }

        $procductById->product_name = $request->product_name;
        $procductById->category_id = $request->category_id;
        $procductById->brand_id = $request->brand_id;
        $procductById->product_price = $request->product_price;
        $procductById->product_quantity = $request->product_quantity;
        $procductById->product_size = $request->product_size;
        $procductById->product_short_description = $request->product_short_description;
        $procductById->product_long_description = $request->product_long_description;
        if (isset($imageUrl)) {
        $procductById->product_main_image = $imageUrl;
        }
        $procductById->product_creater_id = $request->product_creater_id;
        $procductById->publication_status = $request->publication_status;
        $procductById->save();
        return redirect()->back()->with('message','Product Updateed');

    }

    public function delete_product($id){
        $procductById = Product::find($id);
        if(isset($procductById->product_main_image)){
        unlink($procductById->product_main_image);            
        }
        $procductById->delete();
        return redirect()->back()->with('message','Product Deleted');
    }
}
