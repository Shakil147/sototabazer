 @extends('admin.master')

@section('title')
Orders Dashbord
@endsection

@section('minContent')

 <div class="container-fluid"> 
      <!-- Title -->
      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h5 class="txt-dark">Invoice</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="#"><span>Other Pages</span></a></li>
            <li class="active"><span>Invoice</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb --> 
      </div>
      <!-- /Title --> 
      <!-- Row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Order #{{ $pamentInfo->order_id }}</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="printableArea">
                  <div class="col-xs-12">
                    <div class="pull-left">
                      <h3><b class="text-primary">Hyrax UX Admin</b></h3>
                      <p class="text-muted ml-5 mt-10">385 "SHUBHAM" <br/>
                        NEW ADARSH COLONY <br/>
                        MR4 Road, I/F Gajannan Park, <br/>
                        Jabalpur - 482001 <br/>
                        Madhya Pradesh, INDIA </p>
                    </div>
                    <div class="pull-right text-left">
                      <h3>To,</h3>
                      <h4 class="font-bold">{{ $info->first_name.' '.$info->last_name }}</h4>
                      <p class="text-dark mt-10  ">{{ $info->email }}  {{ $info->phone_no }} <br/>
                        {{ $info->address_1 }}, {{ $info->address_2 }}    POST : {{ $info->postcode }} <br/>
                        {{ $info->zilla_name }} , {{ $info->up_zilla_name }} <br/>
                         {{ $info->country }}</p>
                      <p class="mt-10"><b class="txt-dark">Order ID :</b> <span class="txt-dark strong"><i class="fa fa-calendar"></i> #{{ $pamentInfo->order_id }}</span></p>
                      <p><b class="txt-dark">Order Date :</b> <span class="txt-dark text-default"><i class="fa fa-calendar"></i> {{ $pamentInfo->created_at }}</span></p>
                      <p><b class="txt-dark">Pament Status :</b> <span class="label label-primary"><i class="fa fa-check-square"></i> {{ $pamentInfo->payment_status }}</span></p>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-xs-12">
                    <div class="table-responsive mt-40">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th class="text-center">#</th>
                            <th>Description</th>
                            <th class="text-right">Quantity</th>
                            <th class="text-right">Unit Cost</th>
                            <th class="text-right">Total</th>
                          </tr>
                        </thead>
                         <?php 
                    $subtotle= 0; $vatRate = 5; $grandTotal = 0; $shippingRate = 50; $sl = 0;
                    foreach ($orderDetails as $details) {
                        $subtotle = $details->product_quantity*$details->product_price+$subtotle;
                    }
                    $grandTotal = $subtotle + ($subtotle * $vatRate) / 100 + $shippingRate;
                    $vat = ($subtotle * $vatRate) / 100;
                    ?>
                        <tbody>
                          @foreach($orderDetails as $details)
                          <tr>
                            <td class="text-center">{{ $sl+=1 }}</td>
                            <td>{{ $details->product_name }}</td>
                            <td class="text-right">{{ $details->product_quantity }}</td>
                            <td class="text-right">TK {{ $details->product_price }}</td>
                            <td class="text-right">TK {{ $details->product_price*$details->product_quantity }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                 
                  <div class="col-xs-12">
                    <div class="pull-right mt-30 text-right">
                      <p>Sub - Total amount: TK {{ $subtotle }}</p>
                      <p>vat (15%) : TK {{ $vatRate }} </p>
                      <hr class="mt-10 mb-10">
                      <h4 class="mb-10"><b>Total :</b>TK {{ $grandTotal }}</h4>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="text-right">
                  <hr class="mt-10 mb-20">
                  <button id="print" class="btn btn-primary" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /row --> 
    </div>

@endsection

@section('plugjs')

@endsection

