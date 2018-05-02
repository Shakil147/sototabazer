<?php

namespace App\Http\Controllers;
use Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCartProduct = Cart::content();
        return view('frontend.cart.showCart',['CartProduct'=>$allCartProduct]);
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
     * @param  \Illuminate\Http\Request  $request.$cart->options->image
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
         $product = Product::find($request->product_id);
    
        Cart::add([
            'id'    => $product->id,
            'name'  => $product->product_name,
            'price' => $product->product_price,
            'qty'   => $request->quantity,
            'options' => array('image' => $product->product_main_image)
            
        ]);
        /*return Cart::content();*/
        $conmirmMessage = $request->quantity.' '.$product->product_name.' '.' added to your cart';
       return redirect()->back()->with('message', $conmirmMessage);
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
    public function update(Request $request)
    {
        $product = Cart::update($request->rowId, $request->qty);
        return redirect()->back()->with('message','Product Qwantity Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Cart::remove($id);
        return redirect()->back()->with('message','One product was deleted');
    }
}
