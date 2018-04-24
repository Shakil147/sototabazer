@extends('admin.master')

@section('title')
MENAGE Orders
@endsection

@section('minContent')
	<div class="panel panel-primary" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
		<div class="panel-heading">
			<h2>All Orders</h2>
			<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
		</div>
		<div class="panel-body no-padding" style="display: block;">
			<table class="table table-bordered">
				<thead>
					<tr class="success">
						<th>SL</th>
                        <th>Order Id</th>
                        <th>Customer Name</th>
                        <th>Order status</th>
                        <th>Payment Type</th>
                        <th>Payment status</th>
                        <th>Order Date</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
					@php($i=1)
                    @foreach($orders as $order)
                        <tr>
                            <td class="scenter">{{ $i++ }}</td>
                            <td class="scenter">{{ $order->id }}</td>
                            <td class="scenter">{{ $order->customer_name }}</td>
                            <td class="scenter">{{ $order->order_status }}</td>
							
                            <td>{{ $order->payment_type }}</td>
                            @if($order->payment_status == 1)
							<td class="success">Recived</td>
							@else
							<td class="warning">Due</td>
							@endif
                            <td><a href="#" title="{{ $order->created_at }} {!! $order->customer_name !!}">{!! date('d/m/Y', strtotime($order->created_at)) !!}</a></td>
                            <td>
                                <a href="{{ url('/order/view/'.$order->id) }}" class="btn btn-info btn-xs" title="View Order Details">
                                    <span class="glyphicon glyphicon-zoom-in"></span>
                                </a>
                                <a href="{{ url('/order/invoice/'.$order->id) }}" class="btn btn-warning btn-xs" title="View Order Invoice">
                                    <span class="glyphicon glyphicon-book"></span>
                                </a>
                                <a href="{{ url('/order/download/'.$order->id) }}" class="btn btn-success btn-xs" title="Download Order Invoice">
                                    <span class="glyphicon glyphicon-download"></span>
                                </a>
                                <a href="{{ url('/order/edit/'.$order->id) }}" class="btn btn-primary btn-xs" title="Download Order Invoice">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{ url('/order/delete/'.$order->id) }}" class="btn btn-danger btn-xs" title="Delete Category" onclick="return confirm('Are you sure to delete this'); ">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection 