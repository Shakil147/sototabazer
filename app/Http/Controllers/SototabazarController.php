<?php

namespace App\Http\Controllers;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SototabazarController extends Controller
{
    public function show_single_product($id){
        $productsById = DB::table('products')
            ->join('cetagories', 'products.category_id', '=', 'cetagories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*','cetagories.cetagory_name','brands.brand_name')
            ->where('products.id',$id)->first();
            
            $allImages = ProductImage::where('product_id',$id)->get();
    	return view('frontend.single.single',['productInfo'=>$productsById,'productImages'=>$allImages]);
    }

    public function show_contact_form(){
    	return view('frontend.contact.contact');
    }

    public function product_by_cetagory($id){
        $allProductsByCetagory = DB::table('products')
            ->join('users', 'products.product_creater_id', '=', 'users.id')
            ->join('cetagories', 'products.category_id', '=', 'cetagories.id')
            ->join('brands', 'products.brand_id', '=', 'cetagories.id')
            ->select('products.*','cetagories.cetagory_name','users.name','brands.brand_name')
            ->where('products.publication_status',1)
            ->where('category_id',$id)
            ->orderBy('id', 'desc')->get();
            $allImages = ProductImage::all();
            /*return $images;*/
    	return view('frontend.products.products',['allProductsByCetagory'=>$allProductsByCetagory,'allImages'=>$allImages]);
    }
    public function about(){
    	return view('frontend.about.about');
    }
}
