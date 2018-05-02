<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
use Cart;

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
                $wellcome = 'Hellow'.' '.$customer->customer_name.' '.'Wellcome to ShototaBazar';

                return redirect('/')->with('message', $wellcome);
            } else {
                return redirect()->back()->with('message', 'Your password is not correct');
            }
        } 
        else {
            return redirect()->back()->with('message', 'Your email is not correct');
        }

    }

    public function show_login_form(){
        $customerName = Session::get('customerName');
        $customerId = Session::get('customerId');
        if (isset($customerName)) {
            return redirect()->back()->with('message', 'Your are alrady loged in ');
        }
       return view('frontend.login.login'); 
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
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
        return redirect(url('/'))->with('message',$wellcome);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show_register_form(){
        $customerName = Session::get('customerName');
        $customerId = Session::get('customerId');
        if (isset($customerName)) {
            return redirect()->back()->with('message', 'Your are alrady loged in ');
        }
        return view('frontend.login.register'); 
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
