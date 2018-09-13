@extends('admin.master')

@section('title')
Order Details
@endsection

@section('minContent')
 <div class="container-fluid"> 
      <!-- Title -->
      <div class="row heading-bg">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h5 class="txt-dark">shippingInfo Details</h5>
        </div>
      </div>
      <!-- /Title --> 
      <!-- Row -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Order Status</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="col-lg-10">
                  <div class="order-status">
                    <ul>
                      <li>
                        <div class="circle-1"><i class="mdi mdi-check-all text-primary"></i></div>
                        <span>Order Placed</span></li>
                      <li class="boder-css"></li>
                      <li>
                        <div class="circle-1"><i class="mdi mdi-check-all text-primary"></i></div>
                        <span>Order Shipped</span></li>
                      <li class="boder-css"></li>
                      <li>
                        <div class="circle-1"><i class="mdi mdi-check-all text-primary"></i></div>
                        <span>In Transit</span></li>
                      <li class="boder-css"></li>
                      <li>
                        <div class="circle-1"><i class="mdi mdi-check-all text-primary"></i></div>
                        <span>Out for Delivery</span></li>
                      <li class="boder-css"></li>
                      <li>
                        <div class="circle-1"><i class="mdi mdi-dots-horizontal text-danger"></i></div>
                        <span>Delivered</span></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="btn-group pull-right">
                    <div class="dropdown">
                      <button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary dropdown-toggle mt-10" type="button">Change Order Status <span class="caret"></span></button>
                      <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Row --> 
      <!-- Row -->
      <div class="row">
        <div class="col-md-8 col-xs-12">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Order Summery</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="datatable-responsive table-responsive">
                  <table id="simpletable" class="table  table-bordered nowrap dark ma-0">
                    <thead>
                      <tr>
                        <th>Product ID</th>
                        <th>Product name</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>QTY</th>
                        <th>Total</th>
                        <th> </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($orderDetails as $details)
                      <tr >
                        <td>#{{ $details->product_id }}</td>
                        <td class="vertical-align-middle"><div class="pull-left"><img class="image-responsive" width="50" src="{{ asset($details->product_main_image) }}" alt="{{ $details->product_name }}" title="{{ $details->product_name }}"></div>
                          <div class="pull-left pa-10">{{ $details->product_name }}</div></td>
                        <td>{{ $details->brand_name }}</td>
                        <td>TK {{ $details->product_price }}</td>
                        <td>{{ $details->product_quantity }}</td>
                        <td>TK {{ $details->product_price*$details->product_quantity }}</td>
                        <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Edit"><i class="mdi mdi-lead-pencil font-18 txt-primary"></i></a> &nbsp; <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-close txt-danger font-18"></i></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>

            <?php 
            $subtotle= 0; $vatRate = 5; $grandtotal = 0; $shippingRate = 50;
            foreach ($orderDetails as $details) {
                $subtotle = $details->product_quantity*$details->product_price+$subtotle;
            }
            $grandtotal = $subtotle + ($subtotle * $vatRate) / 100 + $shippingRate;
            $vat = ($subtotle * $vatRate) / 100;
            ?>
          <div class="row"></div>
          <div class="row">
            <div class="col-sm-6 col-xs-12">
              <div class="panel panel-default card-view">
                <div class="panel-heading">
                  <div class="pull-left">
                    <h6 class="panel-title txt-dark">Payment Details</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table ma-0">
                        <tr>
                          <td class="boder-0">Transaction ID: <span class="text-color">{{ $pamentInfo->id }}</span></td>
                        </tr>
                        <tr>
                          <td class="boder-0">Amount: <span class="text-color">TK {{ $grandtotal }}</span></td>
                        </tr>
                        <tr>
                          <td class="boder-0">Payment Method: <span class="text-color">{{ $pamentInfo->payment_type }}</span></td>
                        </tr>
                        <tr>
                          <td class="boder-0">Date: <span class="text-color">{{ $pamentInfo->created_at }}</span></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xs-12">
              <div class="panel panel-default card-view">
                <div class="panel-heading">
                  <div class="pull-left">
                    <h6 class="panel-title txt-dark">Total </h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table ma-0">
                        <tr>
                          <td class="boder-0">Subtotal Price</td>
                          <td class="boder-0">TK {{ $subtotle }}</td>
                        </tr>
                        <tr>
                          <td class="boder-0">Discount</td>
                          <td class="boder-0">TK 0</td>
                        </tr><tr>
                          <td class="boder-0">VAT</td>
                          <td class="boder-0">TK {{ $vat }}</td>
                        </tr>
                        <tr>
                          <td class="boder-0">Delivery (Sundarbon LTD.)</td>
                          <td class="boder-0">TK {{ $shippingRate }}</td>
                        </tr>
                        <tr>
                          <td class="boder-0"><strong class="text-color">Total price</strong></td>
                          <td class="boder-0"><strong class="text-color">TK {{ $grandtotal }}</strong></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xs-12">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Coustumer Details</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table mb-0">
                    <tbody>
                      <tr>
                        <td>Name</td>
                        <td class="text-color">{{ $info->first_name.' '.$info->last_name }}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td class="text-color">{{ $info->email }}</td>
                      </tr>
                      <tr>
                        <td>Phone</td>
                        <td class="text-color">{{ $info->phone_no }}</td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td class="text-color">{{ $info->address_1 }}, {{ $info->address_2 }} <br>
                            POST : {{ $info->postcode }} <br>
                        {{ $info->zilla_name }} , {{ $info->up_zilla_name }} , {{ $info->country }}
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Shipping Address</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table mb-5">
                    <tbody>
                      <tr>
                        <td>Name</td>
                        <td class="text-color">{{ $shippingInfo->first_name.' '.$shippingInfo->last_name }}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td class="text-color">{{ $shippingInfo->email }}</td>
                      </tr>
                      <tr>
                        <td>Phone</td>
                        <td class="text-color">{{ $shippingInfo->phone_no }}</td>
                      </tr>
                      <tr>
                        <td>zilla</td>
                        <td class="text-color">{{ $shippingInfo->zilla_name }}</td>
                      </tr>
                      <tr>
                        <td>Upzilla</td>
                        <td class="text-color">{{ $shippingInfo->up_zilla_name }}</td>
                      </tr>
                      <tr>
                        <td>Post Code</td>
                        <td class="text-color">{{ $shippingInfo->postcode }}</td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td class="text-color">{{ $shippingInfo->address_1 }}, {{ $shippingInfo->address_2 }}
                        </td>
                      </tr>
                      <tr>
                        <td>Country</td>
                        <td class="text-color">{{ $shippingInfo->country }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Row --> 
    </div>
@endsection 

@section('plugjs')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
   document.forms['updateOrder'].elements['order_status'].value = '{{  $info->order_status }}'
</script>
<script>
      $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>


@endsection
