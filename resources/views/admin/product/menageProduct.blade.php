@extends('admin.master')

@section('minContent')
	<div class="panel panel-primary" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
		<div class="panel-heading">
			<h2>All Product</h2>
			<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
		</div>
		<div class="panel-body no-padding" style="display: block;">
			<table class="table table-bordered">
				<thead>
					<tr class="success ">
						<th>#</th>
						<th>Id</th>
						<th>Name</th>
						<th>Cetagory</th>
						<th>Brand</th>
						<th>Prise</th>
						<th>Status</th>
						<th>Time</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $sl=0; ?>
					@foreach($allProducts as $Product)
					<tr>
						<td>{{ $sl =$sl+1 }}</td>
						<td>{{ $Product->id }}</td>
						<td>{{ $Product->product_name }}</td>
						<td>{{ $Product->cetagory_name }}</td>
						<td>{{ $Product->brand_name }}</td>
						<td>{{ $Product->product_price }}</td>
						
						@if($Product->publication_status == 1)
						<td class="success">Published</td>
						@else
						<td class="warning">Unpublished</td>
						@endif
						<td><a href="#" title="{{ $Product->created_at }} {!! $Product->name !!}">{!! date('d/m/Y', strtotime($Product->created_at)) !!}</a></td>
                           <td>
                                <a href="{{ url('/Product/view/'.$Product->id) }}" class="btn btn-info btn-xs" title="View Product Details">
                                    <span class="fa  fa-eye"></span>
                                </a>

                                @if($Product->publication_status == 1)
                                <a href="{{ url('/Product/status/'.$Product->id) }}" class="btn btn-success btn-xs" title="UnPublished Product">
                                    <span class="fa fa-feed"></span>
                                </a>
                                @else
                                    <a href="{{ url('/Product/status/'.$Product->id) }}" class="btn btn-warning btn-xs" title="Published Product">
                                        <span class="fa fa-feed"></span>
                                    </a>
                                @endif
                                <a href="{{ url('/Product-edit/'.$Product->id) }}" class="btn btn-primary btn-xs" title="Edit Product">
                                    <span class="fa   fa-pencil"></span>
                                </a>
                                <a href="{{ url('/Product/delete/'.$Product->id) }}" class="btn btn-danger btn-xs" title="Delete Product" onclick="return confirm('Are you sure to delete this'); ">
                                    <span class="fa  fa-trash-o"></span>
                                    </a>

                            </td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection