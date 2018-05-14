@extends('frontend.master')
@section('title')
Cart
@endsection
@section('body')

<body class="res layout-subpage layout-1 banners-effect-5">
    <div id="wrapper" class="wrapper-fluid">
        
@endsection

@section('mainContainer')


<div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Shopping Cart</a></li>
        </ul>
        <div class="row">
            <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h2 class="title">Shopping Cart</h2>
            <div class="table-responsive form-group">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td class="text-center">Image</td>
                    <td class="text-left">Product Name</td>
                    <td class="text-left">Product Cod</td>
                    <td class="text-left">Quantity</td>
                    <td class="text-right">Unit Price</td>
                    <td class="text-right">Total</td>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                            $total = 0;  $subtotal = 0; $gq = 0; $taxrate = 5;   $shippingCost = 50;
                            foreach ($CartProduct as $bcart) {
                                 $total = $bcart->qty*$bcart->price;
                                 $subtotal = $subtotal+$total;
                                 $gq = $gq+$bcart->qty;


                            }
                             $grandtotal = $subtotal + ($subtotal  * $taxrate) / 100 + $shippingCost;
                            $tax = ($subtotal  * $taxrate) / 100;
                                         ?>
                  @foreach($CartProduct as $product)
                  <tr>
                    <td class="text-center"><a href="{{ url('/single-product/'.$product->id) }}"><img width="70px" src="{{ asset($product->options->image) }}" alt="{{ $product->name }}" title="{{ $product->name }}" class="img-thumbnail" /></a></td>
                    <td class="text-left"><a href="{{ url('/single-product/'.$product->id) }}">{{ $product->name }}</a><br />
                     </td>
                    <td class="text-left">{{ $product->id }}</td>
                    <td class="text-left" width="200px"><div class="input-group btn-block quantity">
                        
                        <div class="container container-fluid">
                             <div class="row">
                                {!! Form::open(['route' => 'cart.update','method'=>'post']) !!}
                        <input type="number" name="qty" value="{{  $product->qty }}" min="1" max="50" 
                        class=" col-sm-6" />
                        <input type="hidden" name="rowId" value="{{ $product->rowId }}">
                        <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="Update" class=" btn btn-primary"><i class="glyphicon glyphicon-edit"></i></button> 
                        
                        {!! Form::close() !!} 
                        <div class="pull-right col-sm-1">
                            <a href="{{ url('/cart-delet/'.$product->rowId) }}" class="btn btn-danger "><i class="fa fa-times-circle"></i></a>
                        </div>
                        
                           
                        </div>
                        
                        
                        </span></div></td>
                    <td class="text-right">TK. {{ $product->price }}</td>
                    <td class="text-right">TK. {{ $product->qty*$product->price }}</td>
                  </tr>
                @endforeach
                  
                </tbody>
              </table>
            </div>
        
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="text-right">
                                <strong>Sub-Total:</strong>
                            </td>
                            <td class="text-right">TK. {{ $subtotal }}</td>
                        </tr>
                        <tr>
                            <td class="text-right">
                                <strong>Flat Shipping Rate:</strong>
                            </td>
                            <td class="text-right">TK. {{ $shippingCost }}</td>
                        </tr>
                        <tr>
                            <td class="text-right">
                                <strong>VAT (5%):</strong>
                            </td>
                            <td class="text-right">TK {{ $tax }}</td>
                        </tr>
                        <tr>
                            <td class="text-right">
                                <strong>Total:</strong>
                            </td>
                            <td class="text-right">TK. {{ $grandtotal }}</td>
                        </tr>
                    </tbody>
                </table>
             <div class="buttons">
                <div class="pull-left"><a href="index-2.html" class="btn btn-primary">Continue Shopping</a></div>
                @if($customerId= Session::get('customerName') )
                <div class="pull-right"><a href="{{ route('shipping.info') }}" class="btn btn-primary">Checkout {{ $customerId }}</a></div>
                @else

                    <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
              <i class="glyphicon glyphicon-check"></i>Checkout
            </button>
             @endif

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please Login or Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       {!! Form::open(['class'=>'col-sm-12','route' => 'checkout-login-acount','method'=>'post']) !!}
          <div class="form-group">
            <label for="recipient-name" class="col-sm-4 col-form-label">E-mail:</label>
            <input type="email" name="email" class="col-sm-6 form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-sm-4 col-form-label">Password:</label>
            <input type="password" name="password" class="col-sm-6 form-control" id="recipient-password">
          </div>
        
      </div>
      <div class="modal-footer">
        <a href="{{ route('checkout.register') }}" class="btn btn-success glyphicon glyphicon-registration-mark pull-left">Register</a>
        <button type="submit" class="btn btn-primary pull-right">Login</button>
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
          </div>
        </div>
            </div>
        </div>

         
        <!--Middle Part End -->
            
        </div>
    </div>

    @endsection