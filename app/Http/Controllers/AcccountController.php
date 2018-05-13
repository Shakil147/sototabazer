<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
use Cart;
use Mail;
use DB;

class AcccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();
        /*return $customer;*/

        if(isset($customer)) {
            if(password_verify($request->password, $customer->password)) {
                Session::put('customerId', $customer->id);
                Session::put('customerName',  $customer->first_name.' '.$customer->last_name);
                $wellcome = 'Hellow'.' '.$customer->first_name.' '.$customer->last_name.' '.'Wellcome to ShototaBazar';
                $this->login_message($customer);
                return redirect('/')->with('message', $wellcome);
            } else {
                return redirect()->back()->with('message', 'Your password is not correct');
            }
        } 
        else {
            return redirect()->back()->with('message', 'Your email is not correct');
        }
    }
    protected function login_message($customer)
    {   
        $messageBody = 'Dear'.' '.$customer->first_name.' '.$customer->last_name.' '.'Just now some loged in from your account';
        $data = array(
            'email' => $customer->email,
            'subject' => 'Login Allert',
            'message_body' => $messageBody );
        Mail::send('email.message', $data, function ($message) use ($data){
            $message->from('shakil@mahmud.com', 'Trendy Blog');        
            $message->to($data['email']);        
            $message->replyTo('john@johndoe.com', 'John Doe');        
            $message->subject($data['subject']);        
            $message->priority(6);
        });
    }

    public function show_login_form(){
        $customerName = Session::get('customerName');
        $customerId = Session::get('customerId');
        if (isset($customerName)) {
            return redirect()->back()->with('message', 'Your are alrady loged in ');
        }
       return view('frontend.login.login'); 
    } 

    protected function acccountValidation($request){
        $this->validate($request, [
            'first_name' => 'required|min:3|max:30|regex:/^[\pL\s\-]+$/u|different:email',
            'last_name' => 'required|min:3|max:30|regex:/^[\pL\s\-]+$/u|different:first_name|different:email',
            'email'     => 'required|email|unique:customers,email',
            'password'  => 'min:6|different:email',
            'password_confirmation' => 'required_with:password|min:6|same:password|different:email',
            'phone_no'  => 'required|regex:/(01)[0-9]{9}/|min:11|max:15|unique:customers,phone_no',
            'address_1' => 'required|different:first_name|different:last_name|different:email|different:country',
            'address_2' => 'different:first_name|different:last_name|different:email|different:country',
            'postcode' => 'numeric',
            'zilla_id'     => 'required',
            'up_zilla_id'     => 'required',
            'country'   => 'required|different:first_name|different:last_name|different:email',
            'agree'     => 'required'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function store($request){
        $customer = new Customer;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        /*$customer->photo = $request->photo;*/
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->phone_no = $request->phone_no;
        $customer->address_1 = $request->address_1;
        $customer->address_2 = $request->address_2;
        $customer->zilla_id = $request->zilla_id;
        $customer->up_zilla_id = $request->up_zilla;
        $customer->postcode = $request->postcode;
        $customer->country = $request->country;
        $customer->save();
        $customerId = $customer->id;
        $customerName = $customer->first_name.' '.$customer->last_name;
        $messageBody = 'Thank you'.' '.$customerName.' '.'for register in Sotota Bazar ';
        $data = array(
            'email' => $customer->email,
            'fullName' => $customerName,
            'subject' => 'wellcome Message',
            'message_body' => $messageBody );        
        Session::put('customerId', $customerId);
        Session::put('customerName', $customerName);
        return $data;
    }

    protected function register_message($data)
    {   
       Mail::send('email.message', $data, function ($message) use ($data){
            $message->from('shakil@mahmud.com', 'Trendy Blog');        
            $message->to($data['email']);        
            $message->replyTo('john@johndoe.com', 'John Doe');        
            $message->subject($data['subject']);        
            $message->priority(6);
        });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        /*return $request;*/
        $this->acccountValidation($request);
        $data = $this->store($request);
        $this->register_message($data);       
        $wellcome = 'Hellow'.' '.$data['fullName'].' '.'Wellcome to ShototaBazar';
        return redirect(url('/'))->with('message',$wellcome);
    }

    public function show_register_form(){
        $customerName = Session::get('customerName');
        $customerId   = Session::get('customerId');
        if (isset($customerName)) {
            return redirect()->back()->with('message', 'Your are alrady loged in ');
        }
        $districts = DB::table('districts')->select('districts.*')->orderBy('districts.name')->get();
        $upazilas  = DB::table('upazilas')->select('upazilas.*')->orderBy('upazilas.name')->get();
        return view('frontend.login.register',['districts' => $districts, 'upazilas' => $upazilas]); 
    }

    public function get_Upa_Zilass(Request $request){
        $data= DB::table('upazilas')->select('upazilas.*')->orderBy('upazilas.name')->where('district_id',$request->id)->get();
        return response()->json($data);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
       $customerName = Session::forget('customerName');
        $customerId = Session::forget('customerId');
        $cart = Cart::destroy();
        return redirect()->back();
    }
}
