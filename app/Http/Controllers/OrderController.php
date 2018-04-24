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
    public function __construct()
    {
        $this->middleware('auth');
    }
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
    public function show_orders($id){  
           $orderByID = DB::table('orders')
           ->join('customers', 'orders.customer_id', '=', 'customers.id')
           ->join('shippings', 'orders.shipping_id', '=', 'shippings.id')
           ->join('payments', 'orders.id', '=', 'payments.order_id')
           ->select('orders.*', 'customers.customer_name', 'customers.customer_email','customers.customer_phone_number','customers.customer_address', 'payments.payment_type','payments.payment_status', 'shippings.full_name','shippings.email','shippings.phone_number','shippings.shipping_address')
           ->where('orders.id', $id)
           ->first();       

        $orderDetails = OrderDetail::where('order_id',$id)->get();
        $allBrand = Brand::all();
        return view('admin.order.orders',['info'=>$orderByID,'details'=>$orderDetails,'allBrand=>$allBrand']); 
    }

    /**
     * Update the Quantaty of Order Details.
     *
     * @return \Illuminate\Http\Response
     */
    public function orders_qty_update(Request $request){
      $orderDetails = OrderDetail::find($request->orders_ID);
      $orderDetails->product_quantity = $request->product_quantity;
      $orderDetails->save();
      return redirect()->back()->with('message','Information Updated');
    }


        /**
     * Update Order Status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function orders_status_update(Request $request){

      $orderByID = Order::find($request->id);
      $orderByID->order_status = $request->order_status;
      $orderByID->save();
      return redirect()->back()->with('message','Information Updated');        
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
    
    /**
     * Display Order Invoise.
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
           ->first();      

        $orderDetails = OrderDetail::where('order_id',$id)->get();
        $allBrand = Brand::all();
        return view('admin.order.invoiseOrder',[
            'info'=>$orderByID, 
            'orderDetails'=>$orderDetails,
            'allBrand=>$allBrand' ]);
    }

    /**
     * Downlod order Invoise.
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

        $orderDetails = OrderDetail::where('order_id',$id)->get();
        $pdf = PDF::loadView('invoiseOrder', [
            'ordersInfo'=>$orderByID, 
            'orderDetails'=>$orderDetails,
            'allBrand=>$allBrand']);
        return $pdf->stream('invoice.pdf');
    }

}
