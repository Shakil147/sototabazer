<?php

namespace App\Http\Controllers;
use App\Order;
use App\Brand;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
 //      $orders = Order::all();
        $orders = DB::table('orders')
           ->join('customers', 'orders.customer_id', '=', 'customers.id')
           ->join('payments', 'orders.id', '=', 'payments.order_id')
           ->select('orders.*', 'customers.customer_name', 'payments.payment_type','payments.payment_status')
           ->orderBy('orders.id', 'desc')
           ->get();
//        return $orders;
        return view('admin.order.menageOrder',['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_order_invoise($id){
         $orderByID = DB::table('orders')
           ->join('customers', 'orders.customer_id', '=', 'customers.id')
           ->join('shippings', 'orders.shipping_id', '=', 'shippings.id')
           ->join('payments', 'orders.id', '=', 'payments.order_id')
           ->select('orders.*', 'customers.customer_name', 'customers.customer_email','customers.customer_phone_number','customers.customer_address', 'payments.payment_type','payments.payment_status', 'shippings.full_name','shippings.email','shippings.phone_number','shippings.shipping_address')
           ->where('orders.id', $id)
           ->get();
           /*return $ordersByID;*/
       

        $orderDetails = OrderDetail::where('order_id',$id)->get();
        $allBrand = Brand::all();
        return view('admin.order.invoiseOrder',[
            'ordersInfo'=>$orderByID, 
            'orderDetails'=>$orderDetails,
            'allBrand=>$allBrand'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function downlod_order_invoise($id){
        $orderByID = DB::table('orders')
           ->join('customers', 'orders.customer_id', '=', 'customers.id')
           ->join('shippings', 'orders.shipping_id', '=', 'shippings.id')
           ->join('payments', 'orders.id', '=', 'payments.order_id')
           ->select('orders.*', 'customers.customer_name', 'customers.customer_email','customers.customer_phone_number','customers.customer_address', 'payments.payment_type','payments.payment_status', 'shippings.full_name','shippings.email','shippings.phone_number','shippings.shipping_address')
           ->where('orders.id', $id)
           ->get();
           /*return $ordersByID;*/
       

        $orderDetails = OrderDetail::where('order_id',$id)->get();
        $pdf = PDF::loadView('invoiseOrder', [
            'ordersInfo'=>$orderByID, 
            'orderDetails'=>$orderDetails,
            'allBrand=>$allBrand'
        ]);
        return $pdf->stream('invoice.pdf');
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
    public function destroy($id)
    {
        //
    }
}
