@extends('admin.master')

@section('minContent')
	<div class="panel panel-primary" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
		<div class="panel-heading">
			<h2>All Brand</h2>
			<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
		</div>
		<div class="panel-body no-padding" style="display: block;">
			<table class="table table-bordered">
				<thead>
					<tr class="success ">
						<th>#</th>
						<th>Id</th>
						<th>Brand Name</th>
						<th>Status</th>
						<th>Creater Id</th>
						<th>Time</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($allBrand as $Brand)
					<tr>
						<td>1</td>
						<td>{{ $Brand->id }}</td>
						<td>{{ $Brand->brands_name }}</td>
						
						@if($Brand->publication_status == 1)
						<td class="success">Published</td>
						@else
						<td class="warning">Unpublished</td>
						@endif
						<td>{{ $Brand->name }}</td>
						<td><a href="#" title="{{ $Brand->created_at }}">{!! date('d/m/Y', strtotime($Brand->created_at)) !!}</a></td>
                           <td>
                                <a href="{{ url('/brand/view/'.$Brand->id) }}" class="btn btn-info btn-xs" title="View Brand Details">
                                    <span class="fa  fa-eye"></span>
                                </a>

                                @if($Brand->publication_status == 1)
                                <a href="{{ url('/brand/status/'.$Brand->id) }}" class="btn btn-success btn-xs" title="UnPublished Brand">
                                    <span class="fa fa-feed"></span>
                                </a>
                                @else
                                    <a href="{{ url('/brand/status/'.$Brand->id) }}" class="btn btn-warning btn-xs" title="Published Brand">
                                        <span class="fa fa-feed"></span>
                                    </a>
                                @endif
                                <a href="{{ url('/brand-edit/'.$Brand->id) }}" class="btn btn-primary btn-xs" title="Edit Brand">
                                    <span class="fa   fa-pencil"></span>
                                </a>
                                <a href="{{ url('/brand/delete/'.$Brand->id) }}" class="btn btn-danger btn-xs" title="Delete Brand" onclick="return confirm('Are you sure to delete this'); ">
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