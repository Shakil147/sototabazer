<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class BrandController extends Controller
{
    public function add_brand(){
    	return view('admin.brand.addbrand');
    }

    protected function storeBrandImage($Brand_icon, $request)
    {
        $imageName = time() . '.' . $Brand_icon->getClientOriginalExtension();
        $directory = 'brands_icon/';
        $Brand_icon = Image::make($request->file('brand_icon'))->resize(250, 250)->save($directory.$imageName);
        $imageUrl = $directory.$imageName;
        return $imageUrl;
    }

    protected function storeBrandBasic($request, $imageUrl = null)
    {           
        $saveBrand = new Brand;
        $saveBrand->brand_name = $request->brand_name;
        $saveBrand->brand_description = $request->brand_description;
        if(isset($imageUrl)){
            $saveBrand->brand_icon = $imageUrl;
        }
        $saveBrand->brand_creater_id = $request->brand_creater_id;
        $saveBrand->publication_status = $request->publication_status;
        $saveBrand->save();
    }

    public function save_brand(Request $request)
    {   
        $this->validate($request, [
            'brand_name' => 'required|min:3',
            'brand_description' => 'required',
            'brand_creater_id'     => 'required',
            'publication_status'     => 'required'
        ]);
    	$Brand_icon= $request->file('brand_icon');
        if(isset($Brand_icon)){
            $imageUrl = $this->storeBrandImage($Brand_icon, $request);
            $this->storeBrandBasic($request, $imageUrl);
         }
         else{
             $this->storeBrandBasic($request);
         }
    	return redirect()->back()->with('message','Brand daved');
    }

    public function menage_brand()
    {
        $allBrand = DB::table('brands')
            ->join('users', 'brands.brand_creater_id', '=', 'users.id')
            ->select('brands.*','users.name')
            ->orderBy('id', 'desc')->get();
        return view('admin.brand.menageBrand',['allBrand'=>$allBrand]);
    }

    public function edit_brand($id)
    {
        $brandById = Brand::find($id);
        return view('admin.brand.updateBrand',['brandById'=>$brandById]);
    }
    protected function editBrandIcon($request, $brandById)
    {
        $Brand_icon= $request->file('brand_icon');
        if(isset($Brand_icon)){
            $imageName = time() . '.' . $Brand_icon->getClientOriginalExtension();
            $directory = 'brands_icon/';
            if($brandById->brands_icon){
                unlink($brandById->brand_icon);            
            }
            $Brand_icon = Image::make($request->file('brand_icon'))->resize(250, 250)->save($directory.$imageName);
            $imageUrl = $directory.$imageName;
            return $imageUrl;
         }
    }

    protected function editBrandBasic($request, $brandById, $imageUrl)
    {
        $brandById->brand_name = $request->brand_name;
        $brandById->brand_description = $request->brand_description;
        if(isset($imageUrl))
        {
            $brandById->brand_icon = $imageUrl;
        }
        $brandById->brand_creater_id = $request->brand_creater_id;
        $brandById->publication_status = $request->publication_status;
        $brandById->save();
    }

    public function update_brand(Request $request)
    {   
        //return $request;
        $this->validate($request, [
            'brand_name' => 'required|min:3',
            'brand_description' => 'required',
            'brand_creater_id'     => 'required',
            'publication_status'     => 'required'
        ]);
        $brandById = Brand::find($request->id);
        $imageUrl = $this->editBrandIcon($request, $brandById);
        $this->editBrandBasic($request, $brandById, $imageUrl);        
        return redirect()->back()->with('message','Brand Updated');
    }

    public function status_brand($id)
    {
        $brandById = Brand::find($id);
        if($brandById->publication_status == 1)
        {
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
    public function delete_brand($id)
    {
        $brandById = Brand::find($id);
        if(isset($brandById->brands_icon))
        {
            unlink($brandById->brands_icon);            
        }
        $brandById->delete();
        return redirect()->back()->with('message','Brand Deleted');

    }

}
