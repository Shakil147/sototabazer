<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Shipping;
use App\Order;
use App\Payment;
use App\OrderDetail;
use Illuminate\Http\Request;
use Cart;
use Session;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    public function show_login_from(){    
        /*$allCartProduct = Cart::count();
            if ($allCartProduct >=1 ) {
                if (Session::get('customerName')) {
                    return redirect()->back()->with('message','you are allrady loged in');
                }
             return view('frontend.checkout.chakOutLogin');
                
            }*/
            return view('frontend.checkout.chakOutLogin');
    return redirect()->back()->with('message','you have not any product in cart');
    }
    public function show_register_from(){    
        $allCartProduct = Cart::count();
            if ($allCartProduct >=1 ) {
                if (Session::get('customerName')) {
                    return redirect()->back()->with('message','you are allrady loged in');
                }
             return view('frontend.checkout.chakOutRegister');
                
            }
    return redirect()->back()->with('message','you have not any product in cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Creat_acount(Request $request){
        
        $this->validate($request, [
            'first_name' => 'required|min:3|max:30|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|min:3|max:30|regex:/^[\pL\s\-]+$/u',
            'email'     => 'required|email|unique:customers,email',
            'password'  => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6',
            'phone_no'  => 'required|regex:/(01)[0-9]{9}/|min:11|max:15|unique:customers,phone_no',
            'address_1' => 'required',
            'zilla'     => 'required',
            'country'   => 'required',
            'agree'     => 'required'
        ]);
        $customer = new Customer;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        /*$customer->photo = $request->photo;*/
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->phone_no = $request->phone_no;
        $customer->address_1 = $request->address_1;
        $customer->address_2 = $request->address_2;
        $customer->up_zilla = $request->up_zilla;
        $customer->zilla = $request->zilla;
        $customer->postcode = $request->postcode;
        $customer->country = $request->country;
        $customer->save();
       /* return $customer;*/

        $customerId = $customer->id;
        $customerName = $customer->first_name.' '.$customer->last_name;
        Session::put('customerId', $customerId);
        Session::put('customerName', $customerName);
        $wellcome = 'Hellow '.$customerName.' '.'Wellcome to ShototaBazar';

        return redirect('/shipping-info')->with('message',$wellcome);
        
    }

    public function login_from_cart(Request $request){
        $customer = Customer::where('email', $request->email)->first();
       

        if(isset($customer)) {
            if(password_verify($request->password, $customer->password)) {
                Session::put('customerId', $customer->id);
                Session::put('customerName',  $customer->first_name.' '.$customer->last_name);

                $wellcome = 'Hellow'.' '.$customer->customer_name.' '.'Wellcome to ShototaBazar';
                return redirect('/shipping-info')->with('message', $wellcome);
            } else {
                return redirect()->back()->with('message', 'Your password is not correct');
            }
        } 
        else {
            return redirect()->back()->with('message', 'Your email is not correct');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_shiping_info(Request $request){
        $shipping = new Shipping;
        $shipping->full_name = $request->firstName.' '.$request->lastName;
        $shipping->email = $request->email;
        $shipping->phone_number = $request->mobileNo;
        $shipping->shipping_address = $request->address_1.' '.$request->city.' '.$request->zilla;
        $shipping->save();
        $shippingId = $shipping->id;
        Session::put('shippingId', $shippingId);

        return redirect('/payment-info');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shiping_info(){
        $customerId = Session::get('customerId');
        $customer = Customer::find($customerId);
        $allCartProduct = Cart::content();
        return view('frontend.checkout.shippingForm',
         ['customer'=>$customer,'CartProduct'=>$allCartProduct]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_payment_form(){
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
    public function store_payment_form(Request $request){
        $peymentType = $request->peymentType;
        if($peymentType == 'COD') {
             return redirect('/cod-order-submit');

        } else if($paymentType == 'Bkash') {
            return $peymentType;
        } else if($peymentType == 'Paypal') {
            return $peymentType;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function COD_payment_submit(){

        $order = new Order;
            $order->customer_id = Session::get('customerId');
            $order->shipping_id = Session::get('shippingId');
            $order->save();
            $orderId = $order->id;

            $payment = new Payment;
            $payment->order_id = $orderId;
            $payment->payment_type = 'COD';
            $payment->save();

            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct) {
                $orderDetails = new OrderDetail;
                $orderDetails->order_id = $orderId;
                $orderDetails->product_id  = $cartProduct->id;
                $orderDetails->product_name = $cartProduct->name;
                $orderDetails->product_price = $cartProduct->price;
                $orderDetails->product_quantity = $cartProduct->qty;
                $orderDetails->save();
            }
     return redirect('/')->with('message','your order recived successfully Thank you we will contat you verry soon');       
     return redirect('/complete-order');       
    }

    public function complete_order(){

        Session::forget('shippingId');
        Cart::destroy();
        return view('frontend.checkout.orderComplet');
    }
}
