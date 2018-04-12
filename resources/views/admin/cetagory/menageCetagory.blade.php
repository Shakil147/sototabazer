@extends('admin.master')

@section('minContent')
	<div class="panel panel-primary" >
		<div class="panel-heading" style="font-size: large;">
			<p>All Cetagories</p>
			<a href="{{ url('/add-cetagory') }}" class="glyphicon glyphicon-plus" style="float: right; margin-top: -22px; color: #fff;" title="Add Eew Cetagories"></a>
				
		</div>
		<div class="panel-body no-padding" style="display: block;">
			<table class="table table-bordered">
				<thead>
					<tr class="success ">
						<th>#</th>
						<th>Id</th>
						<th>Cetagory Name</th>
						<th>Creater</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $sl = 0;  ?>
					@foreach($allCetagory as $cetagory)
					<tr>
						<td>{{ $sl = $sl+1 }}</td>
						<td>{{ $cetagory->id }}</td>
						<td>{{ $cetagory->cetagory_name }}</td>
						<td>{{ $cetagory->name }}</td>
						@if($cetagory->publication_status == 1)
						<td class="success">Published</td>
						@else
						<td class="warning">Unpublished</td>
						@endif
                           <td>
                                <a href="{{ url('/category/view/'.$cetagory->id) }}" class="btn btn-info btn-xs" title="View Blog Details">
                                    <span class="fa  fa-eye"></span>
                                </a>

                                @if($cetagory->publication_status == 1)
                                <a href="{{ url('/category/status/'.$cetagory->id) }}" class="btn btn-success btn-xs" title="Published Cetagory">
                                    <span class="fa fa-feed"></span>
                                </a>
                                @else
                                    <a href="{{ url('/category/status/'.$cetagory->id) }}" class="btn btn-warning btn-xs" title="Published Cetagory">
                                        <span class="fa fa-feed"></span>
                                    </a>
                                @endif
                                <a href="{{ url('/category-edit/'.$cetagory->id) }}" class="btn btn-primary btn-xs" title="Edit Blog">
                                    <span class="fa   fa-pencil"></span>
                                </a>
                                <a href="{{ url('/category/delete/'.$cetagory->id) }}" class="btn btn-danger btn-xs" title="Delete Blog" onclick="return confirm('Are you sure to delete this'); ">
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