<?php

namespace App\Http\Controllers;
use App\Cetagory;
use App\Brand;
use App\Product;
use App\ProductImage;
use App\ProductCetagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

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
  /*Add Product*/

  /*save_product validation*/

    protected function addProductValidation($request){
        $this->validate($request, [
            'product_name'=>'required',
            'category_id'=>'required',
            'brand_id'=>'required',
            'reguler_price'=>'required',
            'product_price'=>'required',
            'product_size'=>'required',
            'product_short_description'=>'required',
            'product_long_description'=>'required',
            'product_main_image'=>'required',
            'publication_status'=>'required'
        ]);
    }
    /*Save Image with Intesvention*/
    protected function storeImage($productImage){
        $imageName = 'main_'.'_'.time().'_'.$productImage->getClientOriginalName();
        $directory = 'product_image/';
        $save = Image::make($productImage)->resize(600, 600)->save($directory.$imageName);
        $imageUrl = $directory.$imageName;
        return $imageUrl;
    }
    
    /*save others Images with Intesventio*/

    protected function storeProductFile($images, $saveProduct){
        foreach ($images as $image) {
            $imagseName = 'other_'.'_'.time().'_'.$image->getClientOriginalName();
            $directory = 'product_image/';
            $save = Image::make($image)->resize(600, 600)->save($directory.$imagseName);
            $imagesUrl = $directory.$imagseName;
            $saveProductImage = new ProductImage;
            $saveProductImage->product_id = $saveProduct->id;
            $saveProductImage->product_image = $imagesUrl;
            $saveProductImage->save();
        }
    }

    /*Save product Info*/

    protected function storeProductBasic($request, $imageUrl=null){
        $saveProduct = new Product;
        $saveProduct->product_name = $request->product_name;
        $saveProduct->category_id = $request->category_id;
        $saveProduct->brand_id = $request->brand_id;
        $saveProduct->reguler_price = $request->reguler_price;
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
        return $saveProduct;
    }

    /*Save product*/

    public function save_product(Request $request){
        $this->addProductValidation($request);

         $productImage = $request->file('product_main_image');
        if (isset($productImage)) {
            $imageUrl= $this->storeImage($productImage);
            $saveProduct =$this->storeProductBasic($request, $imageUrl);
        }else{
            $saveProduct = $this->storeProductBasic($request);
        }
        $images = $request->file('images');
        if (isset($images)) {
            $this->storeProductFile($images, $saveProduct);
        }
        return redirect()->back()->with('message','Product Saved');
    }

    /*end Add Product*/

    /*Menage Product*/
    public function menage_product(){
        $allProducts = DB::table('products')
            ->join('users', 'products.product_creater_id', '=', 'users.id')
            ->join('cetagories', 'products.category_id', '=', 'cetagories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*','cetagories.cetagory_name','users.name','brands.brand_name')
            ->orderBy('id', 'desc')->get();
        return view('admin.product.menageProduct',['allProducts'=>$allProducts]);
    }

    /*Update Pubilcation Status*/

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

    /*Show Update Product Form*/

    public function edit_product($id){
        $allCetagory = Cetagory::where('publication_status',1)->get();
        $allBrand = Brand::where('publication_status',1)->get();
        $procductById = Product::find($id);
        $imagesById = ProductImage::where('product_id', $id)->get();
        return view('admin.product.updateProduct',[
            'allCetagory'=>$allCetagory,
            'allBrand'=>$allBrand,
            'procduct'=>$procductById,
            'images'=>$imagesById
        ]);
    }

    /*Update Product*/
    /*edit product*/

    /*edit product validation*/
    protected function editProductValidation($request){
        $this->validate($request, [
            'id'=>'required',
            'product_name'=>'required',
            'category_id'=>'required',
            'brand_id'=>'required',
            'reguler_price'=>'required',
            'product_price'=>'required',
            'product_size'=>'required',
            'product_short_description'=>'required',
            'product_long_description'=>'required',
            'publication_status'=>'required'
        ]);
    }

    /*Edit Image with Intesvention*/
    protected function editProductImage($procduct, $mainImage=null){
        $imageName = time() . '.' . $mainImage->getClientOriginalExtension();
        $directory = 'product_image/';
        if(isset($procduct->product_main_image)){
        unlink($procduct->product_main_image);            
        }
        $save = Image::make($mainImage)->resize(600, 600)->save($directory.$imageName);
        $imageUrl = $directory.$imageName;
        return $imageUrl;
    }
    /*Edit Product Basic*/
    protected function editProductBasic($procduct, $request, $imageUrl=null)
    {
       $procduct->product_name = $request->product_name;
        $procduct->category_id = $request->category_id;
        $procduct->brand_id = $request->brand_id;
        $procduct->reguler_price = $request->reguler_price;
        $procduct->product_price = $request->product_price;
        $procduct->product_quantity = $request->product_quantity;
        $procduct->product_size = $request->product_size;
        $procduct->product_short_description = $request->product_short_description;
        $procduct->product_long_description = $request->product_long_description;
        if (isset($imageUrl)) {
            $procduct->product_main_image = $imageUrl;
        }
        $procduct->product_creater_id = $request->product_creater_id;
        $procduct->publication_status = $request->publication_status;
        $procduct->save();
        return $procduct;
    }

    /*Update Product*/
    public function update_product(Request $request){
        $this->editProductValidation($request);
        $procduct = Product::find($request->id); 
        $mainImage= $request->file('product_main_image');
        if(isset($mainImage)){
            $imageUrl = $this->editProductImage($procduct, $mainImage);
            $procduct = $this->editProductBasic($procduct, $request, $imageUrl);
         } else{
            $procduct = $this->editProductBasic($procduct, $request);
         }        
        return redirect()->back()->with('message','Product Updateed');
    }

    protected function add_product_images(Request $request)
    {  /* return $request->product_id;*/

        $Image = $request->file('product_image');
        $imageName = 'other_'.'_'.time().'_'.$Image->getClientOriginalName();
        $directory = 'product_image/';
        $save = Image::make($Image)->resize(600, 600)->save($directory.$imageName);
        $imageUrl = $directory.$imageName;

        $saveImage = new ProductImage;
        $saveImage->product_id = $request->product_id;
        $saveImage->product_image = $imageUrl;
        $saveImage->save();
        return redirect()->back()->with('message','Image saved');
    }

    protected function delete_product_images($id)
    {
        $imagesById = ProductImage::find($id);
        if(isset($imagesById->product_image)){
        unlink($imagesById->product_image);            
        }
        $imagesById->delete();
        return redirect()->back()->with('message','Image Deleted');
    }
    /*Delete Product*/
    public function delete_product($id){
        $procductById = Product::find($id);
        if(isset($procductById->product_main_image)){
        unlink($procductById->product_main_image);            
        }
        $procductById->delete();
        return redirect()->back()->with('message','Product Deleted');
    }
}
