<?php

namespace App\Http\Controllers;
use App\Order;
use App\Brand;
use App\OrderDetail;
use Illuminate\Http\Request;
use DB;
use PDF;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('admin.order.dashbordOrder');
    }

    public function menage(){
 //      $orders = Order::all();
        $orders = DB::table('orders')
           ->join('customers', 'orders.customer_id', '=', 'customers.id')
           ->join('payments', 'orders.id', '=', 'payments.order_id')
           ->select('orders.*', 'customers.first_name', 'customers.last_name', 'payments.payment_type','payments.payment_status')
           ->orderBy('orders.id', 'desc')
           ->get();
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
           ->join('districts','districts.id','=','customers.zilla_id')
           ->join('upazilas','upazilas.id','=','customers.up_zilla_id')
           ->select('orders.*', 'customers.first_name', 'customers.last_name', 'customers.email','customers.phone_no','customers.address_1','customers.address_2','customers.postcode','customers.country','districts.zilla_name','upazilas.up_zilla_name')
           ->where('orders.id', $id)->first(); 

           $pamentInfo = DB::table('orders')           
           ->join('payments', 'orders.id', '=', 'payments.order_id')
           ->select('payments.id','payments.payment_type','payments.payment_status','payments.created_at')
           ->where('orders.id', $id)->first(); 

           $shippingInfoByID = DB::table('orders')
           ->join('shippings', 'orders.shipping_id', '=', 'shippings.id')           
           ->join('districts','districts.id','=','shippings.zilla_id')
           ->join('upazilas','upazilas.id','=','shippings.up_zilla_id')
           ->select('orders.*','shippings.first_name', 'shippings.last_name', 'shippings.email','shippings.phone_no','shippings.address_1','shippings.address_2','districts.zilla_name','upazilas.up_zilla_name','shippings.postcode','shippings.country')
           ->where('orders.id', $id)->first();   

        $orderDetails = DB::table('order_details')
            ->join('orders','orders.id','=','order_details.order_id')
            ->join('products','products.id','=','order_details.product_id')
            ->join('brands','brands.id','=','order_details.brand_id')
            ->select('order_details.*','products.product_name','products.product_main_image','brands.brand_name','orders.order_status')
            ->where('order_details.order_id',$id)
            ->get();
        return view('admin.order.orders',[
          'info'=>$orderByID,
          'orderDetails'=>$orderDetails,
          'pamentInfo'=>$pamentInfo,
          'shippingInfo'=>$shippingInfoByID
          ]); 
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
           ->join('districts','districts.id','=','customers.zilla_id')
           ->join('upazilas','upazilas.id','=','customers.up_zilla_id')
           ->select('orders.*', 'customers.first_name', 'customers.last_name', 'customers.email','customers.phone_no','customers.address_1','customers.address_2','customers.postcode','customers.country','districts.zilla_name','upazilas.up_zilla_name')
           ->where('orders.id', $id)->first(); 

           $pamentInfo = DB::table('orders')           
           ->join('payments', 'orders.id', '=', 'payments.order_id')
           ->select('payments.*')
           ->where('orders.id', $id)->first(); 

           $shippingInfoByID = DB::table('orders')
           ->join('shippings', 'orders.shipping_id', '=', 'shippings.id')           
           ->join('districts','districts.id','=','shippings.zilla_id')
           ->join('upazilas','upazilas.id','=','shippings.up_zilla_id')
           ->select('orders.*','shippings.first_name', 'shippings.last_name', 'shippings.email','shippings.phone_no','shippings.address_1','shippings.address_2','districts.zilla_name','upazilas.up_zilla_name','shippings.postcode','shippings.country')
           ->where('orders.id', $id)->first();   

        $orderDetails = DB::table('order_details')
            ->join('orders','orders.id','=','order_details.order_id')
            ->join('products','products.id','=','order_details.product_id')
            ->join('brands','brands.id','=','order_details.brand_id')
            ->select('order_details.*','products.product_name','products.product_main_image','brands.brand_name','orders.order_status')
            ->where('order_details.order_id',$id)
            ->get();
        return view('admin.order.invoiseOrder',[
                    'info'=>$orderByID,
                    'orderDetails'=>$orderDetails,
                    'pamentInfo'=>$pamentInfo,
                    'shippingInfo'=>$shippingInfoByID
                    ]);
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

    public function districts()
    {
      $districts = DB::table('districts')
           ->select('districts.*')
           ->orderBy('districts.id', 'desc')
           ->get();
           $unions = DB::table('unions')
           ->select('unions.*')
           ->where('unions.id', '5')
           ->get();
           $upazilas = DB::table('upazilas')
           ->select('upazilas.*')
           ->where('upazilas.id', '5')
           ->get();
           return $upazilas;
    }
    public function upazilas($id)
    {
        return DB::table('upazilas')->select('upazilas.*')->orderBy('upazilas.name')->where('district_id',$id)->get();
    }

}
