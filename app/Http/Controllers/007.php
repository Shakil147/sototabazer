<?php

namespace App\Http\Controllers;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class 007 extends Controller
{
    public function show_orders($id){  
    $ProductsById = DB::table('products')
            ->join('users', 'products.product_creater_id', '=', 'users.id')
            ->join('cetagories', 'products.category_id', '=', 'cetagories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*','cetagories.cetagory_name','users.name','brands.brands_name')
            ->where('products.id',$id)->get();         

            $orderByID = DB::table('orders')
           ->join('customers', 'orders.customer_id', '=', 'customers.id')
           ->join('shippings', 'orders.shipping_id', '=', 'shippings.id')
           ->join('payments', 'orders.id', '=', 'payments.order_id')
           ->select('orders.*', 'customers.customer_name', 'customers.customer_email','customers.customer_phone_number','customers.customer_address', 'payments.payment_type','payments.payment_status', 'shippings.full_name','shippings.email','shippings.phone_number','shippings.shipping_address')
           /*->find('orders.id',$id);*/
           ->where('orders.id', $id)->get();
           /*->get();*/
           return $ProductsById;
       

        $orderDetails = OrderDetail::where('order_id',$id)->get();
        $allBrand = Brand::all();
        return view('admin.order.orders',[
            'ordersInfo'=>$orderByID, 
            'orderDetails'=>$orderDetails,
            'allBrand=>$allBrand'
        ]); 
    }
}
01922793266