@extends('admin.master')

@section('title')
Order Details
@endsection

@section('minContent')
	<div class="panel panel-primary" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
		<div class="panel-heading">
            <div class="container container-fluid">
                
            <div class="col-md-6"><h2><a href="{{ url('/orders') }}" style="color: #FFFFFF">MENAGE Orders</a> <div class="glyphicon glyphicon-arrow-right"></div> Order Details</h2></div>
            <div class="col-md-6">                
                <a href="{{ url('/order/download/'.$info->id) }}" class="col-sm-1 btn btn-link glyphicon glyphicon-download-alt pull-right" ></a>
            </div>

                
            </div>
			
			<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
		</div>
		<div class="panel-body no-padding" style="display: block;">
            <div id="details" class="clearfix">
                <div class="container" style="padding-bottom: 10px;">
                    <div class="col-sm-6">
                        <div class="to">Castomer Info:</div>
                        <h2 class="name">{{ $info->first_name.' '.$info->last_name }}</h2>
                        <div class="address">{{ $info->address_1 }}</div>
                        <div class="address">{{ $info->address_2 }}</div>
                        <div class="address">{{ $info->postcode }}</div>
                        <div class="address">{{ $info->up_zilla }}</div>
                        <div class="address">{{ $info->zilla }}</div>
                        <div class="address">{{ $info->country }}</div>
                        <div class="email"><a href="#">{{ $info->phone_no }}</a></div>
                        <div class="email"><a href="#">{{ $info->email }}</a></div>
                        <div class="date">Date of Order: {!! date('d/m/Y', strtotime($info->created_at)) !!}</div>
                    </div>
                    <div class="col-sm-6" style="text-align: right;">
                        <div class="to">Shipping Adress</div>
                        <h2 class="name">{{ $info->first_name.' '.$info->last_name }}</h2>
                        <div class="address">{{ $shippingInfo->address_1 }}</div>
                        <div class="address">{{ $shippingInfo->address_2 }}</div>
                        <div class="address">{{ $shippingInfo->postcode }}</div>
                        <div class="address">{{ $shippingInfo->up_zilla }}</div>
                        <div class="address">{{ $shippingInfo->zilla }}</div>
                        <div class="address">{{ $shippingInfo->country }}</div>
                        <div class="email"><a href="#">{{ $info->phone_no }}</a></div>
                        <div class="email"><a href="#">{{ $info->email }}</a></div>
                        <div class="date">Order Status: {!! $info->order_status !!}</div>
                        <div class="date">Payment Status: {!! $info->payment_status !!} ({{$info->payment_type }})</div>
                    </div>
                </div> 
            </div>
        </div>
		<table class="table table-bordered">
			<thead>
				<tr class="success">
					<th>#</th>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Sub Total</th>
                    <th>Order Date</th>
				</tr>
			</thead>
            <?php $sl = 0; $subtotle= 0; $taxrate = '5'; $grandtotal = 0; ?>
            @foreach($details as $order)
    <tr>
        <td class="scenter">{{ $sl+=1 }}</td>
        <td class="scenter">{{ $order->id }}</tb>
        <td class="desc"><b>{{ $order->product_name }}</b></td>
        <td class="unit">Tk.  {{ $prise = $order->product_price }}</td>
        <!-- <td class="qty">{{ $qty = $order->product_quantity }}</td> -->
        <td class="col-sm-5" style="text-align: center; padding-left: 21px;">
        <div class="row" >
        {!! Form::open(['route' => 'order.details.update','method'=>'post']) !!}
            <input class="col-sm-5" type="number" name="product_quantity" value="{{ $qty = $order->product_quantity }}" min="1" max="100" style="border-color: black; border-radius: 4px;" />
            <input type="hidden" name="orders_ID" value="{{ $order->id }}" />
            
                <button  type="submit" class="btn btn-info glyphicon glyphicon-refresh col-sm-2" style="border-radius: 4px; margin-left: 20px;" title="UPDATE"></button>
            
        
        {!! Form::close() !!}
        <a href="{{ url('/cart-delet/'.$order->id) }}" class="btn btn-danger glyphicon glyphicon-trash col-sm-2" title="Deleta" style="margin-left: 20px;"></a>
        </div>

      </td>
        
        <?php $totle = $prise*$qty; $subtotle= $subtotle+$totle;  ?>
        <td class="total">Tk.  {{ $totle = number_format($totle, 2) }}</td>
        
        <td><a href="#" title="{{ $order->created_at }}"><!-- {!! date('d/m/Y', strtotime($order->created_at)) !!} --> {{ $order->created_at->toFormattedDateString() }}</a></td>
    </tr>
            @endforeach
                
        </table>
                <?php 
    $grandtotal = $subtotle + ($subtotle * $taxrate) / 100;
    $tax = $grandtotal-$subtotle;
    ?>
        <div class="container" style="padding-bottom: 10px; padding-top: 20px;">
                    <div class="col-sm-6" style="margin-top: 13px;4margin-left: -35px;">
                    {!! Form::open(['route' => 'order.status.update','method'=>'post','name'=>'updateOrder']) !!}
                    <div class="form-group">
                      <label for="selector1" class="col-sm-4 control-label" style="position: relative; text-align: right;">ORDER STATUS</label>
                      <div class="col-sm-7">
                        <select name="order_status" id="selector1" class="js-example-basic-single form-control1 control-label" style="style="padding-top: 5px;" required>

                        
                    @if($info->order_status == "PANDING" )
                        <option value="PANDING" disabled>PANDING</option>

                        <option value="APPROVED">APPROVE</option>
                        <option value="CANCELLED">CANCELL</option>
                    @endif

                    @if($info->order_status == "CANCELLED")
                        <option value="APPROVED">APPROVED</option>
                        <option value="PANDING">PANDING</option>
                        <option value="CANCELLED" disabled>CANCELL</option>                        
                    @endif

                    @if($info->order_status == "APPROVED" )
                        <option value="APPROVED" disabled>APPROVE</option>
                        <option value="ONWAY">ONWAY</option>
                        <option value="CANCELLED">CANCELL</option>
                    @endif

                    @if($info->order_status == "ONWAY" )                      
                        <option value="ONWAY" disabled>ONWAY</option>
                        <option value="DELIVERED" >DELIVERED</option> 
                        <option value="UNSUCCESSFULL" >UNSUCCESSFULL</option>
                    @endif

                    @if($info->order_status == "DELIVERED" )
                        <option value="DELIVERED" disabled>DELIVERED</option>
                        <option value="SUCCESSFULL" >SUCCESSFULL</option>
                        <option value="UNSUCCESSFULL" >UNSUCCESSFULL</option>
                    @endif 

                    @if($info->order_status == "SUCCESSFULL" )
                        <option value="SUCCESSFULL" disabled>SUCCESSFULL</option>
                    @endif

                    @if($info->order_status == "UNSUCCESSFULL" )
                        <option value="SUCCESSFULL" >SUCCESSFULL</option>                    
                        <option value="UNSUCCESSFULL" disabled>UNSUCCESSFULL</option>
                    @endif
                            </select>
                            <input type="hidden" name="id" value="{{ $info->id }}" />
                        </div>
                        <button  type="submit" class="btn btn-info glyphicon glyphicon-refresh col-sm-1 control-label" style="border-radius: 4px; margin-top: -5px; title="UPDATE"></button>
                    </div>                    
                    
                    {!! Form::close() !!}
                    </div>
                    <div class="col-sm-6" style="text-align: right;">                        
                        <h4 class="name">TOTAL = TK. {{ $subtotle  }}</h4>
                        <h4 class="name">5% TAX = TK. {{ $tax }}</h4>
                        @if($info->payment_status == "DUE")
                        <h3 class="name" style="color:  #F91818;">GRAND TOTAL = TK. {{ $grandtotal }}</h3>
                        @else
                        <h3 class="name" style="color:  #3ED46C;">GRAND TOTAL = TK. {{ $grandtotal }}</h3>
                        @endif
                    </div>
                </div> 
		</div>
	</div>
@endsection 

@section('plugjs')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
      $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>


@endsection
