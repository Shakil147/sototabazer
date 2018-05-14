<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Shipping;
use App\Order;
use App\Payment;
use App\Product;
use App\OrderDetail;
use Cart;
use Session;
use Mail;
use Illuminate\Http\Request;
use DB;

class CheckOutController extends Controller
{
    /**
     * Display a listing of Cart product and Shipping info form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        if (Session::get('customerName')) 
        {
            return redirect(route('shipping.info'));
        }
        return view('frontend.checkout.chakOutLogin'); 
    }

    /**
     * Display a Chakout login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_login_from()
    {  
        return view('frontend.checkout.chakOutLogin');;
    }

    /**
     * Display a Chakout Register form.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_register_from()
    {    
        $allCartProduct = Cart::count();
            if ($allCartProduct >=1 ){
                if (Session::get('customerName')){
                    return redirect()->back()->with('message','you are allrady loged in');
                }
            $districts = DB::table('districts')->select('districts.*')->orderBy('districts.zilla_name')->get();
             return view('frontend.checkout.chakOutRegister',['districts' => $districts]);
                
            }
        return redirect()->back()->with('message','you have not any product in cart');
    }

    /**
     *  Chakout Register filde validation.
     *
     */
    protected function acccountValidation($request)
    {
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
     *  Chakout Registretion store basic info.
     *
     */
    protected function store($request)
    {        
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

        Session::put('customerId', $customerId);
        Session::put('customerName', $customerName);
        $messageBody = 'Thank you'.' '.$customerName.' '.'for register in Sotota Bazar ';
        $data = array(
            'email' => $customer->email,
            'fullName' => $customerName,
            'subject' => 'wellcome Message',
            'message_body' => $messageBody );
        return $data;
    }

    /**
     *  Send Messege wellcome to new Member.
     *
     */
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
     *Creat new Customer
     *
     * @return \Illuminate\Http\Response
     */
    public function creat_acount(Request $request)
    {
        $this->acccountValidation($request);
        $data = $this->store($request);
        $this->register_message($data);       
        $wellcome = 'Hellow'.' '.$data['fullName'].' '.'Wellcome to ShototaBazar';
        return redirect(route('shipping.info'))->with('message',$wellcome);
    }

    /**
     *Login form Cart
     *
     * @return \Illuminate\Http\Response
     */
    public function login_from_cart(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();
        if(isset($customer))
        {
            if(password_verify($request->password, $customer->password)) 
            {
                Session::put('customerId', $customer->id);
                Session::put('customerName',  $customer->first_name.' '.$customer->last_name);
               // $this->login_message($customer);
                if (Cart::count() >=1) {
                    $wellcome = 'Hellow'.' '.$customer->first_name.' '.$customer->last_name.' '.'Wellcome to ShototaBazar';
                    return redirect('/shipping-info')->with('message', $wellcome);
                }else{
                    return redirect('/')->with('message','you dont have any product in cart');
                }
            } 
            else {
                return redirect()->back()->with('message', 'Your password is not correct');
            }
        } 
        else {
            return redirect()->back()->with('message', 'Your email is not correct');
        }
    }
    
    /**
     *Login Allert
     *
     * @return \Illuminate\Http\Response
     */
    protected function login_message($customer)
    {   
        $messageBody = 'Dear'.' '.$customer->first_name.' '.$customer->last_name.' '.'Just now some loged in from your account';
        $data = array('email' => $customer->email,
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
     * Shipping Info Validation
     *
     * @return \Illuminate\Http\Response
     */
    protected function shipping_info_validate($request)
    {
       $this->validate($request, [
            'first_name' => 'required|min:3|max:30|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|min:3|max:30|regex:/^[\pL\s\-]+$/u',
            'email'     => 'required|email|unique:shippings,email',
            'phone_no'  => 'required|regex:/(01)[0-9]{9}/|min:11|max:15|unique:shippings,phone_no',
            'agree'  => 'required',
        ]); 
    }
    
    /**
     * Store Shipping Info
     *
     * @return \Illuminate\Http\Response
     */
    protected function store_shiping_info($request)
    {
        $shipping = new Shipping;
        $shipping->first_name = $request->first_name;
        $shipping->last_name  = $request->last_name;
        $shipping->email      =  $request->email;
        $shipping->phone_no   = $request->phone_no;
        $shipping->address_1  = $request->address_1;
        $shipping->address_2  = $request->address_2;
        $shipping->zilla_id      = $request->zilla_id;
        $shipping->up_zilla_id      = $request->up_zilla_id;
        $shipping->postcode   = $request->postcode;
        $shipping->save();
        $shippingId = $shipping->id;
        return $shippingId;
        
    }

    /**
     *Stor Shipping info basic
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save_shiping_info(Request $request)
    {
        $this->shipping_info_validate($request);
        $shippingId = $this->store_shiping_info($request);
        Session::put('shippingId',$shippingId);
        return redirect(route('payment.info'));
    }

    /**
     * Store Shipping Info.
     * Store ShippingID in session.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shiping_info()
    {
        $customerId = Session::get('customerId');
        $customer = Customer::find($customerId);
        $allCartProduct = Cart::content();
        $districts = DB::table('districts')->select('districts.*')->orderBy('districts.zilla_name')->get();
        $upazilas = DB::table('upazilas')->select('upazilas.*')->where('district_id',$customer->zilla_id)->orderBy('upazilas.up_zilla_name')->get();
        return view('frontend.checkout.shippingForm',
         ['customer'=>$customer,'CartProduct'=>$allCartProduct,'districts' => $districts,'upazilas' => $upazilas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_payment_form()
    {
        $allCartProduct = Cart::content();
        return view('frontend.checkout.paymentForm',['CartProduct'=>$allCartProduct]);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store_payment_form(Request $request)
    {
        $peymentType = $request->peymentType;
        if($peymentType == 'COD') {
             return redirect('/cod-order-submit');

        } else if($paymentType == 'Bkash') {
            return $peymentType;
        } else if($peymentType == 'Paypal') {
            return $peymentType;
        }
    }

    protected function saveOrder()
    {
        $order = new Order;
        $order->customer_id = Session::get('customerId');
        $order->shipping_id = Session::get('shippingId');
        $order->save();
        $orderId = $order->id;
        return $orderId;
    }
    protected function savePayment($orderId)
    {
        $payment = new Payment;
        $payment->order_id = $orderId;
        $payment->payment_type = 'COD';
        $payment->save();  
    }

    protected function saveOrderDetails($orderId)
    {
        $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct) {
                $brandId = Product::find($cartProduct->id)->brand_id;
                $orderDetails = new OrderDetail;
                $orderDetails->order_id = $orderId;
                $orderDetails->product_id  = $cartProduct->id;
                $orderDetails->product_name = $cartProduct->name;
                $orderDetails->product_price = $cartProduct->price;
                $orderDetails->brand_id = $brandId;
                $orderDetails->product_quantity = $cartProduct->qty;
                $orderDetails->save();
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function COD_payment_submit()
    {
        $orderId = $this->saveOrder();
        $this->savePayment($orderId);
        $this->saveOrderDetails($orderId);
        return redirect('/')->with('message','your order recived successfully Thank you we will contat you verry soon');     
    }

    public function complete_order()
    {
        Session::forget('shippingId');
        Cart::destroy();
        return view('frontend.checkout.orderComplet');
    }
}

