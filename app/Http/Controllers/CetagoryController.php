<?php

namespace App\Http\Controllers;
use App\Cetagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class CetagoryController extends Controller
{
    public function add_cetagory(){
    	return view('admin.cetagory.addCetagory');
    }

    protected function validateCetagory($request)
    {
        $this->validate($request, [
            'cetagory_name' => 'required|min:3',
            'cetagory_description' => 'required|max:3',
            'cetagory_icon'     => 'required | mimes:jpeg,jpg,png',
            'publication_status'     => 'required'
        ]);
    }
    protected function storeCetagoryIcon($request){       
        $Cetagory_icon = $request->file('cetagory_icon');
        $imageName = time() . '.' . $Cetagory_icon->getClientOriginalExtension();    
        $directory = 'cetagory_icon/';
        $Cetagory_icon = Image::make($request->file('cetagory_icon'))->resize(250, 250)->save($directory.$imageName);
        $imageUrl = $directory.$imageName;
         return $imageUrl;
    }
    protected function storeCetagoryBasic($request, $imageUrl){
        $saveCetagory = new Cetagory;
        $saveCetagory->cetagory_name = $request->cetagory_name;
        $saveCetagory->cetagory_description = $request->cetagory_description;
        $saveCetagory->cetagorie_creater_id = $request->cetagorie_creater_id;
        if(isset($imageUrl)){
        $saveCetagory->cetagory_icon = $imageUrl;
            }
        $saveCetagory->publication_status = $request->publication_status;
        $saveCetagory->save();
    }
    //'cetagory_description' => 'required|min:3|regex:/^[\pL\s\-]+$/u',
    public function save_cetagory(Request $request){
        //return $request;
        $this->validateCetagory($request);
        if(isset($request->cetagory_icon)){
        $imageUrl = $this->storeCetagoryIcon($request);
        }
        $this->storeCetagoryBasic($request,$imageUrl);   	
	   return redirect()->back()->with('message','Cetagory Saved');
    }

    public function menage_cetagory(){
        $allCetagory = DB::table('cetagories')
            ->join('users', 'cetagories.cetagorie_creater_id', '=', 'users.id')
            ->select('cetagories.*','users.name')
            ->orderBy('id', 'desc')->get();

        return view('admin.cetagory.menageCetagory',['allCetagory'=>$allCetagory]);
    }

    public function edit_cetagory($id){
        $cetagoryById = Cetagory::find($id);
        return view('admin.cetagory.updetCetagory',['cetagoryById'=>$cetagoryById]);
    }

    protected function editCetagoryIcon($cetagoryById, $request){
      $Cetagory_icon= $request->file('cetagory_icon');
        $imageName = time() . '.' . $Cetagory_icon->getClientOriginalExtension();
        $directory = 'cetagory_icon/';
        if($cetagoryById->cetagory_icon){
        unlink($cetagoryById->cetagory_icon);            
        }
        $Cetagory_icon->move($directory,$imageName);
        $imageUrl = $directory.$imageName;
        return $imageUrl;  
    }
    protected function editCetagoryBasic($cetagoryById, $request, $imageUrl=null){
        $cetagoryById->cetagory_name = $request->cetagory_name;
        $cetagoryById->cetagory_description = $request->cetagory_description;
        $cetagoryById->cetagorie_creater_id = $request->cetagorie_creater_id;
        $cetagoryById->publication_status = $request->publication_status;
        if(isset($imageUrl)){
            $cetagoryById->cetagory_icon = $imageUrl;
        }
        $cetagoryById->save();
    }

    public function updey_cetagory(Request $request){
         $this->validate($request, [
            'cetagory_name' => 'required|min:3',
            'cetagory_description' => 'required|max:3',
            'cetagory_icon'     => 'mimes:jpeg,jpg,png',
            'publication_status'     => 'required'
        ]);
        $cetagoryById = Cetagory::find($request->id);

        if(isset($request->cetagory_icon)){
            $imageUrl = $this->editCetagoryIcon($cetagoryById, $request); 
            $this->editCetagoryBasic($cetagoryById, $request, $imageUrl);       
        }
        else{
           $this->editCetagoryBasic($cetagoryById, $request); 
        }
        
        
        return redirect()->back()->with('message','Cetagory Updated');

    }

    public function delete_cetagory($id){
        $cetagoryById = Cetagory::find($id);
        if(isset($cetagoryById->cetagory_icon)){
            unlink($cetagoryById->cetagory_icon);            
        }
        $cetagoryById->delete();
        return redirect()->back()->with('message','Cetagory Deleted');
    }

    public function status_cetagory($id){
        $cetagoryById = Cetagory::find($id);
        if($cetagoryById->publication_status == 1){
            $cetagoryById->publication_status = 0 ;
            $cetagoryById->save();
            return redirect()->back()->with('message','Cetagory Unpudlished');
        }
        else{
            $cetagoryById->publication_status = 1 ;
            $cetagoryById->save();
            return redirect()->back()->with('message','Cetagory Pudlished');
        }
    }
}
