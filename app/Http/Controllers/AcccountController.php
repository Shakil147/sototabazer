<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Order;
use App\OrderDetail;
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

    public function index(){
        $districts = DB::table('districts')->select('districts.*')->orderBy('districts.zilla_name')->get();
        return view('frontend.login.register',['districts' => $districts]); 
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
        return $customer;
    }

    protected function register_message($customer, $customerName)
    {   
        $messageBody = 'Thank you'.' '.$customerName.' '.'for register in Sotota Bazar ';
        $data = array(
            'email' => $customer->email,
            'fullName' => $customerName,
            'subject' => 'wellcome Message',
            'message_body' => $messageBody ); 

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
        $this->acccountValidation($request);
        $customer = $this->store($request);

        $customerId = $customer->id;
        $customerName = $customer->first_name.' '.$customer->last_name;       
        Session::put('customerId', $customerId);
        Session::put('customerName', $customerName);

        $this->register_message($customer, $customerName);       
        $wellcome = 'Hellow'.' '.$customerName.' '.'Wellcome to ShototaBazar';
        return redirect(url('/'))->with('message',$wellcome);
    }

    public function get_Upa_Zilass(Request $request){
        $data= DB::table('upazilas')
        ->select('upazilas.*')
        ->orderBy('upazilas.up_zilla_name')
        ->where('district_id',$request->id)
        ->get();
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {  
        $customerName = Session::get('customerName');
        $customerId = Session::get('customerId'); 
        if ($customerId) {
            return redirect('/');
         } else{
             return view('frontend.login.login');

         }
       
    }
    
    public function cheak_login(Request $request)
    {       
        $customer = Customer::where('email', $request->email)->first();
        if(isset($customer)) {
            $cheak = password_verify($request->password, $customer->password);
            if($cheak) {
                $customerName = $customer->first_name.' '.$customer->last_name; 
                Session::put('customerId', $customer->id);
                Session::put('customerName',  $customerName);
                $wellcome = 'Hellow'.' '.$customerName.' '.'Wellcome to ShototaBazar';
                echo "success";
                /*return redirect('/')->with('message', $wellcome);*/
            } else {
                echo "wrongPassword";
                /*return redirect()->back()->with('message', 'Your password is not correct');*/
            }
        } 
        else {  
            echo "wrongEmail";          
            /*return redirect()->back()->with('message', 'Your email is not correct');*/
        }
    }

    protected function login_message($customer, $customerName)
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

    public function my_account()
    {   
        $ssionCustomerId = Session::get('customerId'); 
        if (isset($ssionCustomerId)) { 
            $accountInfo= $this->myInfo($ssionCustomerId);
            $orderDetails = DB::table('order_details')
            ->join('orders','orders.id','=','order_details.order_id')
            ->join('products','products.id','=','order_details.product_id')
            ->join('brands','brands.id','=','order_details.brand_id')
            ->select('order_details.*','products.product_name','products.product_main_image','brands.brand_name','orders.order_status')
            ->where('order_details.customer_id',$accountInfo->id)
            ->get();
            return view('frontend.myAccount.index', ['accountInfo' => $accountInfo,'orderDetails' => $orderDetails]);
        }else{
            return $ssionCustomerId;
        }
        
    }

    protected function myInfo($id)
    {
       $accountInfo= DB::table('customers')
       ->join('districts','districts.id','=','customers.zilla_id')
       ->join('upazilas','upazilas.id','=','customers.up_zilla_id')
        ->select('customers.id','customers.first_name', 'customers.last_name','customers.email','customers.phone_no',
        'customers.address_1','customers.address_2','districts.zilla_name','upazilas.up_zilla_name',
        'customers.postcode','customers.country')
        ->where('customers.id',$id)->first();
       return $accountInfo;
    }

    public function order_information($id)
    {   
        $ssionCustomerId = Session::get('customerId'); 
        $orders = DB::table('orders')
                    ->join('shippings','shippings.id','=','orders.shipping_id')
                    ->join('payments','payments.order_id','=','orders.id')
                    ->join('districts','districts.id','=','shippings.zilla_id')
                    ->join('upazilas','upazilas.id','=','shippings.up_zilla_id')
                    ->select('orders.*','shippings.*','payments.*','districts.zilla_name','upazilas.up_zilla_name')
                    ->where('orders.id',$id)
                    ->first();
        if ($ssionCustomerId ==$orders->customer_id) { 
            $accountInfo= $this->myInfo($ssionCustomerId);
            $orderDetails = DB::table('order_details')
            ->join('orders','orders.id','=','order_details.order_id')
            ->join('products','products.id','=','order_details.product_id')
            ->join('brands','brands.id','=','order_details.brand_id')
            ->select('order_details.*','products.product_name','products.product_main_image','brands.brand_name','orders.order_status')
            ->where('order_details.order_id',$id)
            ->get();
            return view('frontend.myAccount.orderInfo', ['accountInfo' => $accountInfo,'orders' => $orders,'orderDetails' => $orderDetails]);
        }else{
            return $ssionCustomerId;
        }
    }
}