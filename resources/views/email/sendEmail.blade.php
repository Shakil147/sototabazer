
@extends('admin.master')
@section('title')
   send Email
@endsection

@section('minContent')
 <div class="container-fluid"> 
      <!-- Title -->
      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h5 class="txt-dark">Email Inbox</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="#"><span>Email</span></a></li>
            <li class="active"><span>Email Inbox</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb --> 
      </div>
      <!-- /Title --> 
      <!-- Row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
              <div  class="panel-body pt-0">
                <div class="col-md-2 col-xs-12">
                  <div class="pt-10 pb-10 inbox-panel"><a href="email-compose.html" class="btn btn-danger mb-20 p-10 btn-block waves-effect waves-light"> <i class="mdi mdi-pencil mr-10"></i>Compose</a>
                    <ul class="list-group list-group-full">
                      <li class="list-group-item"> <a href="javascript:void(0)"><i class="mdi mdi-email mr-5 font-large"></i> Inbox </a><span class="badge badge-primary ml-auto">26</span></li>
                      <li class="list-group-item"> <a href="javascript:void(0)"> <i class="mdi mdi-star-circle mr-5 font-large"></i> Starred </a><span class="badge badge-info ml-auto">6</span></li>
                      <li class="list-group-item"> <a href="javascript:void(0)"> <i class="mdi mdi-tooltip-edit mr-5 font-large"></i> Draft </a><span class="badge badge-danger ml-auto">1</span></li>
                      <li class="list-group-item "> <a href="javascript:void(0)"> <i class="mdi mdi-check-all mr-5 font-large"></i> Sent Mail </a><span class="badge badge-success ml-auto">6</span></li>
                      <li class="list-group-item"> <a href="javascript:void(0)"> <i class="mdi mdi-delete-sweep mr-5 font-large"></i> Trash </a><span class="badge badge-default ml-auto">5</span></li>
                    </ul>
                    <h3 class="card-title mt-40">Labels</h3>
                    <div class="list-group b-0 mail-list"> 
                        <a href="#" class="list-group-item active txt-dark"><span class="fa fa-circle text-info mr-10"></span>Family</a> 
                        <a href="#" class="list-group-item"><span class="fa fa-circle text-warning mr-10"></span>Social</a>
                         <a href="#" class="list-group-item"><span class="fa fa-circle text-purple mr-10"></span>Private</a> 
                         <a href="#" class="list-group-item"><span class="fa fa-circle text-danger mr-10"></span>Client</a> 
                         <a href="#" class="list-group-item"><span class="fa fa-circle text-success mr-10"></span>Business</a>
                    </div> 
                  </div>
                </div>
                 {!! Form::open(['class'=>'form-horizontal','name' =>'send-e-mail','url' => '/post-E-mail','method'=>'post','enctype'=>'multipart/form-data']) !!}
                <div class="col-md-10 col-xs-12">
                  <div class="card-body">
                    <h3 class="card-title">Compose New Message</h3>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-4 col-xs-12">
                          <input class="form-control" name="email" placeholder="E-mail:">
                        </div>
                        <div class="col-md-8 col-xs-12 pl-0">
                          <input class="form-control" name="subject" placeholder="Subject:">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <!-- <div class="summernote h-150"> </div> -->
                      <textarea class="summernote h-150" name="message_body" id=""></textarea>
                    </div>
                    <h3 class="card-title"><i class="ti-link"></i> Attachment</h3>
                    <div class="form-group">
                      <div class="col-md-2 col-xs-12">
                        <input type="file" name="message_image" id="input-file-now" class="dropify"  />
                      </div>
                        <div class="pull-right">
                          <button type="submit" class="btn btn-success mt-20"><i class="fa fa-envelope-o"></i> Send</button>
                          <button  class="btn btn-danger mt-20"><i class="fa fa-times"></i> Discard</button>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                  </div>
                </div>
                {!! Form::close() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row --> 
    </div>


@endsection

@section('plugjs')


<!-- summernotes CSS -->
<link href="{{ asset('backend') }}/plugins/vendors/bower_components/summernote/dist/summernote.css" rel="stylesheet" />
<!-- file upload -->
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/vendors/bower_components/dropify/dist/css/dropify.min.css">
<!-- <script src="{{ asset('packjes') }}/ckeditor/ckeditor.js"></script>
<script>

  CKEDITOR.replace( 'message_ffbody' );
</script> -->

<!-- Forms JavaScript --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/moment/moment.js"></script>
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/summernote/dist/summernote.min.js"></script> 
<script src="{{ asset('backend') }}/plugins/assets/js/summernote.init.js"></script> 
<!-- File Upload --> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/dropify/dist/js/dropify.min.js"></script> 
<script src="{{ asset('backend') }}/plugins/assets/js/dropify.js"></script> 
@endsection