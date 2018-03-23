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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Creat_acount(Request $request){
        $customer = new Customer;
        $customer->customer_name = $request->name;
        $customer->customer_email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->customer_phone_number = $request->phone_number;
        $customer->customer_address = $request->address;
        $customer->save();
        $customerId = $customer->id;
        Session::put('customerId', $customerId);
        Session::put('customerName', $request->name);

        return redirect('/shipping-info');
        
    }

    public function login_from_cart(Request $request){
        $customer = Customer::where('customer_email', $request->email)->first();

        if($customer) {
            if(password_verify($request->password, $customer->password)) {
                Session::put('customerId', $customer->id);
                Session::put('customerName', $customer->first_name.' '.$customer->last_name);

                return redirect('/shipping-info');
            } else {
                return redirect('/customer-sign-up')->with('message', 'Your password is not correct');
            }
        } 
        else {
            return redirect('/customer-sign-up')->with('message', 'Your email is not correct');
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
        $shipping->full_name = $request->name;
        $shipping->email = $request->email;
        $shipping->phone_number = $request->number;
        $shipping->shipping_address = $request->adress;
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
        return view('frontend.checkout.shippingForm', ['customer'=>$customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_payment_form(){
        return view('frontend.checkout.paymentForm');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store_payment_form(Request $request){
        $paymentType = $request->payment_type;
        if($paymentType == 'COD') {
             return redirect('/cod-order-submit');

        } else if($paymentType == 'Bkash') {
            return $paymentType;
        } else if($paymentType == 'Paypal') {
            return $paymentType;
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
     return redirect('/complete-order');       
    }

    public function complete_order(){

        Session::forget('shippingId');
        Cart::destroy();
        return view('frontend.checkout.orderComplet');
    }
}
