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
        <div class="col-sm-12">
            <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
            </div>
              <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered">
                        <thead>
                          <tr>
                          <td class="text-center">Action</td>
                          <td class="text-center">Image</td>
                          <td class="text-left">Product Name</td>
                          <td class="text-left">Quantity</td>
                          <td class="text-right">Unit Price</td>
                          <td class="text-right">Total</td>
                          </tr>
                        </thead>
                        <tbody>
        <?php 
          $total = 0;  $subtotal = 0; $gq = 0;
          foreach ($CartProduct as $bcart) {
               $total = $bcart->qty*$bcart->price;
               $subtotal = $subtotal+$total;
               $gq = $gq+$bcart->qty;
          } 
          $taxrate = 5; $shippingCost = 50;
           $grandtotal = $subtotal + ($subtotal  * $taxrate) / 100;
          $tax = $grandtotal-$subtotal;
         ?>

                          @foreach($CartProduct as $product)
                          <tr>
                          <td class="text-center">
                            <a  href="{{ url('/cart-delet/'.$product->rowId) }}" class="btn btn-danger" title="Delete"><i class="fa fa-times-circle"></i></a>
                          </td>
                          <td class="text-center"><a href="{{ url('/single-product/'.$product->id) }}">
                      <img width="60px" src="{{ asset($product->options->image) }}" alt="{{ $product->name }}" title="{{ $product->name }}" class="img-thumbnail"></a></td>
                          <td class="text-left"><a href="{{ url('/single-product/'.$product->id) }}">{{ $product->name }}</a></td>
                          <td class="text-left"><div class="input-group btn-block" style="min-width: 100px;">
                        {!! Form::open(['class'=>'container','route' => 'cart.update','method'=>'post']) !!}
                            <input type="number" name="qty" value="{{ $product->qty }}" size="1" min="1" max="50" class="col-sm-6">
                            <input type="hidden" name="rowId" value="{{ $product->rowId }}" size="1" min="1" max="50" class="col-sm-6">
                            <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary col-sm-4 pull-right"><i class="fa fa-refresh"></i></button>
                        {{ Form::close() }}
                            </span></div></td>
                          <td class="text-right">{{ $product->price }}</td>
                          <td class="text-right">{{ $product->price }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                          <tr><td class="bg-success" colspan="6"></td></tr>
                          <tr>
                            <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                            <td class="text-right">TK. {{ $subtotal }}</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td class="text-right" colspan="4"><strong>Flat Shipping Rate:</strong></td>
                            <td class="text-right">TK. {{ $shippingCost }}</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td class="text-right" colspan="4"><strong>VAT ({{ $taxrate }}%):</strong></td>
                            <td class="text-right">TK. {{ $tax }}</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td class="text-right" colspan="4"><strong>Total:</strong></td>
                            <td class="text-right">TK. {{ $grandtotal }}</td>
                            <td></td>
                          </tr>
                        </tfoot>
                      </table>
                      <div class="col-sm-4 col-lg-offset-4">
               <div class="buttons">
                  <div class="pull-left"><a href="{{ url('/') }}" class="btn btn-primary" title="Continue Shopping">Continue Shopping</a></div>
                  @if($customerName= Session::get('customerName') )
                  <div class="pull-right"><a href="{{ route('shipping.info') }}" class="btn btn-primary"><i class="glyphicon glyphicon-shopping-cart"></i>Checkout</a></div>
                  @else
                  <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
                    <i class="glyphicon glyphicon-check"></i>Checkout
                  </button>
               @endif
              </div>
            </div>
              </div>
              </div>
            </div>
          </div>

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
  </div>

@endsection

@section('plgin')

@endsection
<!--  -->