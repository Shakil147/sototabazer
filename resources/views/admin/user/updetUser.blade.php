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
          <h5 class="txt-dark text-center"><a href="{{ url('/users') }}">Menage Users</a></h5> 
        </div>
      </div>
      <!-- /Title --> 
      <!-- Row -->
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-sm-offset-4 col-sm-offset-4">
      <div class="panel panel-default card-view  pa-0">
        <div class="panel-wrapper collapse in">
          <div class="panel-body  pa-0">
            <div class="profile-box">
              <div class="profile-cover-pic">
                <div class="fileupload btn btn-default"> <span class="btn-text"><i class="typcn typcn-pencil"></i></span>
                  <input class="upload" type="file">
                </div>
                <div class="profile-image-overlay"></div>
              </div>
              <div class="profile-info text-center">
                <div class="profile-img-wrap"> <img class="inline-block mb-10" src="{{ asset($profile->avator) }}" alt="user"/>
                </div>
                <h5 class="block mt-5 mb-5 weight-500 capitalize-font txt-primary">{{ $profile->name }}</h5>
                <h6 class="block capitalize-font pb-10">{{ $profile->post }}</h6>
                <h6 class="block capitalize-font pb-10">{{ $profile->email }}</h6>
              </div>
             <div class="social-info">
               <!-- <div class="row">
                 <div class="col-xs-4 text-center"> <span class="counts block head-font"><span class="counter-anim">345</span></span> <span class="counts-text block">post</span> </div>
                 <div class="col-xs-4 text-center"> <span class="counts block head-font"><span class="counter-anim">246</span></span> <span class="counts-text block">followers</span> </div>
                 <div class="col-xs-4 text-center"> <span class="counts block head-font"><span class="counter-anim">898</span></span> <span class="counts-text block">tweets</span> </div>
               </div> -->
                <button class="btn btn-primary btn-block  btn-anim mt-10" data-toggle="modal" data-target="#myModal1"><i class="fa fa-pencil"></i><span class="btn-text">edit profile</span></button>
                <div id="myModal1" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h5 class="modal-title" id="myModalLabel">Edit Profile</h5>
                      </div>
                      <div class="modal-body"> 
                        <!-- Row -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="">
                              <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                  <div class="col-sm-12 col-xs-12">
                                    <div class="form-wrap">
                                      {!! Form::open(['route'=>'updetUserInfo','method'=>'POST']) !!}
                                      <form action="#">
                                        <div class="form-body overflow-hide">
                                          <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Name</label>
                                            <div class="input-group">
                                              <div class="input-group-addon"><i class="mdi mdi-account"></i></div>
                                              <input type="text" name="name" value="{{ $profile->name }}" class="form-control" id="exampleInputuname_1" placeholder="willard bryant">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_1">Email address</label>
                                            <div class="input-group">
                                              <div class="input-group-addon"><i class="mdi mdi-email"></i></div>
                                              <input type="email" name="email" value="{{ $profile->email }}" class="form-control" id="exampleInputEmail_1" placeholder="xyz@gmail.com" readonly>
                                              <input type="hidden" name="id" value="{{ $profile->id }}">
                                            </div>
                                          </div>
                                          <!-- <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputContact_1">Contact number</label>
                                            <div class="input-group">
                                              <div class="input-group-addon"><i class="mdi mdi-cellphone"></i></div>
                                              <input type="email" class="form-control" id="exampleInputContact_1" placeholder="+102 9388333" readonly>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputpwd_1">Password</label>
                                            <div class="input-group">
                                              <div class="input-group-addon"><i class="mdi mdi-lock"></i></div>
                                              <input type="password" class="form-control" id="exampleInputpwd_1" placeholder="Enter pwd" value="password" readonly>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label mb-10">Gender</label>
                                            <div>
                                              <div class="radio">
                                                <input type="radio" name="radio1" id="radio_1" value="option1" checked="">
                                                <label for="radio_1"> Male </label>
                                              </div>
                                              <div class="radio">
                                                <input type="radio" name="radio1" id="radio_2" value="option2">
                                                <label for="radio_2"> Female </label>
                                              </div>
                                            </div> -->
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label mb-10">POST</label>
                                  <select class="form-control" data-placeholder="Choose a Category" name="post">
                                    <option @if($profile->post == 'admin') selected @endif value="admin" disabled>ADMIN</option>
                                    <option  @if($profile->post == 'moderator') selected @endif value="moderator">MODERATOR</option>
                                    <option  @if($profile->post == 'editor') selected @endif value="editor">Editor</option>
                                    <option  @if($profile->post == 'new') selected @endif value="new">NEW</option>
                                    <option @if($profile->post == 'blocked') selected @endif value="blocked">BLOCKED</option>
                                  </select>
                                          </div>
                                        </div>
                                        <button type="submet" class="btn btn-success waves-effect">Save</button>
                                        <button type="reset" class="btn btn-default waves-effect" >Cancel</button>
                                      {!! Form::close() !!}
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.modal-content --> 
                  </div>
                  <!-- /.modal-dialog --> 
                </div>
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
 
<!-- Init JavaScript --> 
<script src="{{ asset('backend') }}/plugins/assets/js/init.js"></script>
@endsection