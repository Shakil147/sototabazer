<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function add_brand(){
    	return view('admin.brand.addbrand');
    }
    public function save_brand(Request $request){

    	$Brand_icon= $request->file('brands_icon');
        if(isset($Brand_icon)){
        $imageName = time() . '.' . $Brand_icon->getClientOriginalExtension();
        $directory = 'brands_icon/';
        $Brand_icon->move($directory,$imageName);
        $imageUrl = $directory.$imageName;
         }

    	$saveBrand = new Brand;
    	$saveBrand->brands_name = $request->brands_name;
    	$saveBrand->brands_description = $request->brands_description;
        if(isset($imageUrl)){
        $saveBrand->brands_icon = $imageUrl;
        }
        $saveBrand->brands_creater_id = $request->brands_creater_id;
    	$saveBrand->publication_status = $request->publication_status;
    	$saveBrand->save();
    	return redirect()->back()->with('message','Brand daved');
    }

    public function menage_brand(){
        $allBrand = DB::table('brands')
            ->join('users', 'brands.brands_creater_id', '=', 'users.id')
            ->select('brands.*','users.name')
            ->orderBy('id', 'desc')->get();
        return view('admin.brand.menageBrand',['allBrand'=>$allBrand]);
    }

    public function edit_brand($id){
        $brandById = Brand::find($id);
        return view('admin.brand.updateBrand',['brandById'=>$brandById]);
    }

    public function update_brand(Request $request){

        $brandById = Brand::find($request->id);

        $Brand_icon= $request->file('brands_icon');
        if(isset($Brand_icon)){
        $imageName = time() . '.' . $Brand_icon->getClientOriginalExtension();
        $directory = 'brands_icon/';
        if($brandById->brands_icon){
        unlink($brandById->brands_icon);            
        }
        $Brand_icon->move($directory,$imageName);
        $imageUrl = $directory.$imageName;
         }

        $brandById->brands_name = $request->brands_name;
        $brandById->brands_description = $request->brands_description;
        if(isset($imageUrl)){
        $brandById->brands_icon = $imageUrl;
        }
        $brandById->brands_creater_id = $request->brands_creater_id;
        $brandById->publication_status = $request->publication_status;
        $brandById->save();
        return redirect()->back()->with('message','Brand Updated');
    }

    public function status_brand($id){
        $brandById = Brand::find($id);
        if($brandById->publication_status == 1){
            $brandById->publication_status = 0 ;
            $brandById->save();
            return redirect()->back()->with('message','Brand Unpudlished');
        }
        else{
            $brandById->publication_status = 1 ;
            $brandById->save();
            return redirect()->back()->with('message','Brand Pudlished');
        }
    }
    public function delete_brand($id){
        $brandById = Brand::find($id);
        if(isset($brandById->brands_icon)){
        unlink($brandById->brands_icon);            
        }
        $brandById->delete();
        return redirect()->back()->with('message','Brand Deleted');

    }

}
