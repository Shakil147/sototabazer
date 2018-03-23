<?php

namespace App\Http\Controllers;
use App\Cetagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CetagoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_cetagory(){
    	return view('admin.cetagory.addCetagory');
    }
    public function save_cetagory(Request $request){
        if(isset($request->cetagory_icon)){
        $Cetagory_icon= $request->file('cetagory_icon');
        $imageName = time() . '.' . $Cetagory_icon->getClientOriginalExtension();
        $directory = 'cetagory_icon/';
        $Cetagory_icon->move($directory,$imageName);
        $imageUrl = $directory.$imageName;
        }

    	$saveCetagory = new Cetagory;
    	$saveCetagory->cetagory_name = $request->cetagory_name;
    	$saveCetagory->cetagory_description = $request->cetagory_description;
        $saveCetagory->cetagorie_creater_id = $request->cetagorie_creater_id;
        if(isset($imageUrl)){
    	$saveCetagory->cetagory_icon = $imageUrl;
            }
    	$saveCetagory->save();
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

    public function updey_cetagory(Request $request){
        $cetagoryById = Cetagory::find($request->id);

        if(isset($request->cetagory_icon)){

        $Cetagory_icon= $request->file('cetagory_icon');
        $imageName = time() . '.' . $Cetagory_icon->getClientOriginalExtension();
        $directory = 'cetagory_icon/';
        if($cetagoryById->cetagory_icon){
        unlink($cetagoryById->cetagory_icon);            
        }
        $Cetagory_icon->move($directory,$imageName);
        $imageUrl = $directory.$imageName;
        }

        $cetagoryById->cetagory_name = $request->cetagory_name;
        $cetagoryById->cetagory_description = $request->cetagory_description;
        $cetagoryById->cetagorie_creater_id = $request->cetagorie_creater_id;
        $cetagoryById->publication_status = $request->publication_status;
        if(isset($imageUrl)){
            $cetagoryById->cetagory_icon = $imageUrl;
        }
        $cetagoryById->save();
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
