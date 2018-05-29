@extends('admin.master')

@section('title')
Profile
@endsection
@section('plgCss')

@endsection
@section('minContent')
 <div class="container-fluid"> 
      <!-- Title -->
      <div class="row heading-bg">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h5 class="txt-dark">Menage Users</h5>
        </div>
      </div>
      <!-- /Title --> 
      <!-- Row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
              <div class="datatable-responsive table-responsive">
                <table id="simpletable" class="table  table-bordered nowrap dark">
                  <thead>
                    <tr>
                      <th>Photo</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Users ID</th>
                      <th>Post</th>
                      <th> </th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($allUser as $user)
                      <tr >
                        <td><img src="{{ asset($user->avator) }}" alt="" class="img-responsive" height="30" width="30"></td>
                        <td class="vertical-align-middle" ><div class="pull-left"><img src="plugins/assets/img/img1.jpg" alt="" title=""></div>
                          <div class="pull-left pa-10">{{ $user->name }}</div></td>
                        <td>{{ $user->email }}</td>
                        <td>#{{ $user->id }}</td>
                        <td ><span class="label label-success">{{ $user->post }}</span></td>
                        <td class="text-center">
                          <a href="{{ url('/updetUser/'.$user->id) }}" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Edit"><i class="mdi mdi-lead-pencil font-18 txt-primary"></i></a> &nbsp; 
                          <a href="#delet" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-close txt-danger font-18"></i></a></td>
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
      </div>
      <!-- /Row --> 
    </div>
@endsection

@section('plugjs')
 
<!-- Init JavaScript --> 
<script src="{{ asset('backend') }}/plugins/assets/js/init.js"></script>
@endsection