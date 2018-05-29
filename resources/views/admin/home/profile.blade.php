@extends('admin.master')

@section('title')
Profile
@endsection
@section('plgCss')
<!-- xeditable css -->
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/vendors/bower_components/dropify/dist/css/dropify.min.css">
@endsection
@section('minContent')
	 <div class="container-fluid"> 
      <!-- Title -->
      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h5 class="txt-dark">Profile</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="#"><span>Other Pages</span></a></li>
            <li class="active"><span>Profile</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb --> 
      </div>
      <!-- /Title --> 
      <!-- Row -->
      <div class="row">
        <div class="col-md-3 col-xs-12">
          <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
              <div class="panel-body pt-0">
                <div class="text-center">
                  <div class="profile-box ">
                    <div class="profile-cover-pic">
                      <div class="profile-image-overlay"></div>
                    </div>
                    <div class="profile-info text-center">
                      <div class="profile-img-wrap"> <img class="inline-block mb-10" src="{{ asset(Auth::user()->avator ) }}" alt="user"/>
                        <div class="fileupload btn btn-default"> <span class="btn-text"><i class="typcn typcn-pencil"></i></span>
                        </div>
                      </div>
                      <h5 class="block mt-5 mb-5 weight-500 capitalize-font txt-primary">{{ Auth::user()->name }}</h5>
                      <h6 class="block capitalize-font pb-10">{{ Auth::user()->post }}</h6>
                    </div>
                    
                  </div>
                  <hr class="mt-10 mb-0">
                  <div class="panel-body pt-10"> <span class="text-muted m-0 font-30 pl-0"><i class="mdi mdi-email text-success"></i> </span>
                    <h6 class="font-normal text-grey">{{ Auth::user()->email }}</h6>
                    <small class="text-muted pt-15 font-30 pl-0 db"><i class="mdi mdi-cellphone-android text-default"></i></small>
                    <h6 class="font-normal text-grey">+91 761 4031437</h6>
                    <small class="text-muted pt-15 font-30 pl-0 db"><i class="mdi mdi-map-marker-radius text-danger"></i></small>
                    <h6 class="font-normal text-grey">385 "SHUBHAM" NEW ADARSH COLONY Near MR4 Road, I/F Gajannan Park</h6>
                    <div class="mt-15">
                      <button class="btn btn-circle facebook-bg btn-secondary"><i class="fa fa-facebook"></i></button>
                      <button class="btn btn-circle twitter-bg btn-secondary"><i class="fa fa-twitter"></i></button>
                      <button class="btn btn-circle youtube-bg btn-secondary"><i class="fa fa-youtube"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
              <div class="panel-body pa-0">
                <div class="list-group"> <a href="javascript:;" class="list-group-item"> <i class="fa fa-asterisk text-primary"></i> &nbsp;&nbsp;Activity Feed <i class="fa fa-chevron-right list-group-chevron pull-right"></i> </a> <a href="javascript:;" class="list-group-item"> <i class="fa fa-book text-primary"></i> &nbsp;&nbsp;Projects <span class="badge">3</span> </a> <a href="javascript:;" class="list-group-item"> <i class="fa fa-envelope text-primary"></i> &nbsp;&nbsp;Messages <i class="fa fa-chevron-right list-group-chevron pull-right"></i> </a> <a href="javascript:;" class="list-group-item"> <i class="fa fa-group text-primary"></i> &nbsp;&nbsp;Friends <i class="fa fa-chevron-right list-group-chevron pull-right"></i> </a> <a href="javascript:;" class="list-group-item"> <i class="fa fa-cog text-primary"></i> &nbsp;&nbsp;Settings <i class="fa fa-chevron-right list-group-chevron pull-right"></i> </a> </div>
                <!-- /.list-group --> 
              </div>
            </div>
          </div>
          <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
              <div class="panel-body pa-0">
                <div class="list-group"> <a href="javascript:;" class="list-group-item">
                  <h3 class="pull-right"><i class="fa fa-eye text-primary"></i>&nbsp;</h3>
                  <h4 class="list-group-item-heading">12,345</h4>
                  <p class="list-group-item-text">Profile Views</p>
                  </a> <a href="javascript:;" class="list-group-item">
                  <h3 class="pull-right"><i class="fa fa-facebook-square  text-primary"></i>&nbsp;</h3>
                  <h4 class="list-group-item-heading">1,767</h4>
                  <p class="list-group-item-text">Facebook Likes</p>
                  </a> <a href="javascript:;" class="list-group-item">
                  <h3 class="pull-right"><i class="fa fa-twitter-square  text-primary"></i>&nbsp;</h3>
                  <h4 class="list-group-item-heading">3,456</h4>
                  <p class="list-group-item-text">Twitter Followers</p>
                  </a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-xs-12">
          <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
              <div class="panel-body pt-0 timeline"> 
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                  <li class="nav-item active"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Timeline</a> </li>
                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content pt-10">
                  <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="card-body">
                      <div class="panel-heading pl-0">
                        <div class="pull-left">
                          <h6 class="panel-title txt-dark">Activity Feed</h6>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="share-widget clearfix">
                        <textarea class="form-control share-widget-textarea" rows="3" placeholder="Share what you've been up to..." tabindex="1"></textarea>
                        <div class="share-widget-actions">
                          <div class="share-widget-types pull-left"> <a href="javascript:;" class="fa fa-picture-o" data-toggle="tooltip" data-placement="top" title="" data-original-title="Post a Photo"><i></i></a> <a href="javascript:;" class="fa fa-video-camera" data-toggle="tooltip" data-placement="top" title="" data-original-title="Upload Video"><i></i></a> <a href="javascript:;" class="fa fa-lightbulb-o" data-toggle="tooltip" data-placement="top" title="" data-original-title="Share your Idea"><i></i></a> <a href="javascript:;" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ask a Question"><i></i></a> </div>
                          <div class="pull-right"> <a class="btn btn-primary btn-sm" tabindex="2">Post</a> </div>
                        </div>
                        <!-- /.share-widget-actions --> 
                      </div>
                      <!-- /.share-widget -->
                      <div class="feed-item feed-item-idea">
                        <div class="feed-icon bg-info"> <i class="fa fa-lightbulb-o"></i> </div>
                        <!-- /.feed-icon -->
                        <div class="feed-subject">
                          <p><a href="javascript:;">Michelle Williams</a> shared an idea: <a href="javascript:;">Neque porro quisquam est qui dolorem i</a></p>
                        </div>
                        <!-- /.feed-subject -->
                        <div class="feed-content">
                          <ul class="icons-list">
                            <li> <i class="icon-li fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis.</li>
                          </ul>
                        </div>
                        <!-- /.feed-content -->
                        <div class="feed-actions"> <a href="javascript:;" class="pull-left"><i class="fa fa-thumbs-up"></i> 432</a> <a href="javascript:;" class="pull-left"><i class="fa fa-comment-o"></i> 56</a> <a href="javascript:;" class="pull-right"><i class="fa fa-clock-o"></i> 9 hours ago</a> </div>
                        <!-- /.feed-actions --> 
                      </div>
                      <!-- /.feed-item -->
                      <div class="feed-item feed-item-file">
                        <div class="feed-icon bg-success"> <i class="fa fa-cloud-upload"></i> </div>
                        <!-- /.feed-icon -->
                        <div class="feed-subject">
                          <p><a href="javascript:;">Michelle Williams</a> posted the <strong>4 files</strong>: <a href="javascript:;">Recruitment Lists</a></p>
                        </div>
                        <!-- /.feed-subject -->
                        <div class="feed-content">
                          <ul class="icons-list files-list">
                            <li> <a href="javascript:;"> <img class="icon-colored-lg ma-0" alt="icon-coloured" src="{{ asset('backend') }}/plugins/assets/img/icons/files/xls.svg" title="xls.svg"> <span class="clearfix"></span> March 2018</a> </li>
                            <li> <a href="javascript:;"><img class="icon-colored-lg ma-0" alt="icon-coloured" src="{{ asset('backend') }}/plugins/assets/img/icons/files/xls.svg" title="xls.svg"> <span class="clearfix"></span>February 2018</a> </li>
                            <li> <a href="javascript:;"><img class="icon-colored-lg ma-0" alt="icon-coloured" src="{{ asset('backend') }}/plugins/assets/img/icons/files/xls.svg" title="xls.svg"> <span class="clearfix"></span>January 2018</a> </li>
                            <li> <a href="javascript:;"><img class="icon-colored-lg ma-0" alt="icon-coloured" src="{{ asset('backend') }}/plugins/assets/img/icons/files/xls.svg" title="xls.svg"> <span class="clearfix"></span>December 2017</a> </li>
                          </ul>
                        </div>
                        <!-- /.feed-content -->
                        <div class="feed-actions"> <a href="javascript:;" class="pull-left"><i class="fa fa-thumbs-up"></i> 432</a> <a href="javascript:;" class="pull-left"><i class="fa fa-comment-o"></i> 56</a> <a href="javascript:;" class="pull-right"><i class="fa fa-clock-o"></i> 9 hours ago</a> </div>
                        <!-- /.feed-actions --> 
                      </div>
                      <!-- /.feed-item -->
                      <div class="feed-item feed-item-image">
                        <div class="feed-icon bg-primary"> <i class="fa fa-picture-o"></i> </div>
                        <!-- /.feed-icon -->
                        <div class="feed-subject">
                          <p><a href="javascript:;">Michelle Williams</a> posted 4 images: <a href="javascript:;">Weekend trip</a></p>
                        </div>
                        <!-- /.feed-subject -->
                        <div class="feed-content">
                          <div class="gallery-wrap">
                            <div class="portfolio-wrap project-gallery">
                              <ul id="portfolio_1" class="portf auto-construct  project-gallery" data-col="4">
                                <li class="item tall" data-src="{{ asset('backend') }}/plugins/assets/img/gallery/equal-size/mock4.jpg" data-sub-html="<h6>Responsive Lightbox</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>"> <a href="#"> <img class="img-responsive" src="{{ asset('backend') }}/plugins/assets/img/gallery/equal-size/mock4.jpg"  alt="Image description" /> <span class="hover-cap">Image Title</span> </a> </li>
                                <li class="item small" data-src="http://vimeo.com/1084537" data-poster="plugins/assets/img/gallery/equal-size/mock3.jpg" data-sub-html="<h6>Ultra Saffire</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>"> <a href="#"> <img class="img-responsive" src="{{ asset('backend') }}/plugins/assets/img/gallery/equal-size/mock3.jpg"  alt="Image description" /> <span class="hover-cap">Image Title</span> </a> </li>
                                <li class="item" data-src="{{ asset('backend') }}/plugins/assets/img/gallery/equal-size/mock5.jpg" data-sub-html="<h6>Responsive Lightbox</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>"> <a href="#"> <img class="img-responsive" src="{{ asset('backend') }}/plugins/assets/img/gallery/equal-size/mock5.jpg"  alt="Image description" /> <span class="hover-cap">Image Title</span> </a> </li>
                                <li class="item" data-html="#video2" data-poster="plugins/assets/img/gallery/equal-size/mock6.jpg" data-sub-html="<h6>Responsive Lightbox</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>"> <a href="#"> <img class="img-responsive" src="{{ asset('backend') }}/plugins/assets/img/gallery/equal-size/mock6.jpg"  alt="Image description" /> <span class="hover-cap">Image Title</span> </a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!-- /.feed-content -->
                        <div class="feed-actions"> <a href="javascript:;" class="pull-left"><i class="fa fa-thumbs-up"></i> 432</a> <a href="javascript:;" class="pull-left"><i class="fa fa-comment-o"></i> 56</a> <a href="javascript:;" class="pull-right"><i class="fa fa-clock-o"></i> 9 hours ago</a> </div>
                        <!-- /.feed-actions --> 
                      </div>
                      <div class="feed-item feed-item-idea">
                        <div class="feed-icon bg-info"> <i class="fa fa-lightbulb-o"></i> </div>
                        <!-- /.feed-icon -->
                        <div class="feed-subject">
                          <p><a href="javascript:;">Michelle Williams</a> shared an idea: <a href="javascript:;">Neque porro quisquam est qui dolorem i</a></p>
                        </div>
                        <!-- /.feed-subject -->
                        <div class="feed-content">
                          <ul class="icons-list">
                            <li> <i class="icon-li fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </li>
                          </ul>
                        </div>
                        <!-- /.feed-content -->
                        <div class="feed-actions"> <a href="javascript:;" class="pull-left"><i class="fa fa-thumbs-up"></i> 432</a> <a href="javascript:;" class="pull-left"><i class="fa fa-comment-o"></i> 56</a> <a href="javascript:;" class="pull-right"><i class="fa fa-clock-o"></i> 9 hours ago</a> </div>
                        <!-- /.feed-actions --> 
                      </div>
                      <!-- /.feed-item --> 
                    </div>
                  </div>
                  <!--second tab-->
                  <div class="tab-pane" id="profile" role="tabpanel">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong> <br>
                          <p class="text-muted">Mason Hudson</p>
                        </div>
                        <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong> <br>
                          <p class="text-muted">(123) 456 7890</p>
                        </div>
                        <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong> <br>
                          <p class="text-muted">mason.hudson@admin.com</p>
                        </div>
                        <div class="col-md-3 col-xs-6"> <strong>Location</strong> <br>
                          <p class="text-muted">India</p>
                        </div>
                      </div>
                      <hr>
                      <p class="mt-10">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text seit 1500, als ein unbekannter Schriftsteller eine Hand voll Wörter.</p>
                      <p>Es ist ein lang erwiesener Fakt, dass ein Leser vom Text abgelenkt wird, wenn er sich ein Layout ansieht. Der Punkt, Lorem Ipsum zu nutzen, ist, dass es mehr oder weniger die normale Anordnung von Buchstaben darstellt und somit nach lesbarer Sprache aussieht. Viele Desktop Publisher und Webeditoren nutzen mittlerweile Lorem.</p>
                      <p>Ipsum als den Standardtext, auch die Suche im Internet nach "lorem ipsum" macht viele Webseiten sichtbar, wo diese noch immer vorkommen. Mittlerweile gibt.</p>
                      <h4 class="font-medium mt-30">Skill Set</h4>
                      <hr>
                      <small class="mt-30">Core Java <span class="pull-right">30%</span></small>
                      <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-info progress-bar-striped active width-30" role="progressbar"> <span class="sr-only">30% Complete</span> </div>
                      </div>
                      <small class="mt-30">JSP <span class="pull-right">40%</span></small>
                      <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-primary progress-bar-striped active width-40" role="progressbar"> <span class="sr-only">40% Complete</span> </div>
                      </div>
                      <small class="mt-30">PHP <span class="pull-right">50%</span></small>
                      <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-warning progress-bar-striped active width-50" role="progressbar"> <span class="sr-only">50% Complete</span> </div>
                      </div>
                      <small class="mt-30">ASP.net <span class="pull-right">60%</span></small>
                      <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active width-60" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="settings" role="tabpanel">
                    <div class="card-body">
          {!! Form::open(['class'=>'form-horizontal form-material','route' => 'changeInfo','method'=>'post','enctype'=>'multipart/form-data',]) !!}
                      <form class="form-horizontal form-material">
                        <div class="form-group">
                          <label class="col-md-12">Full Name</label>
                          <div class="col-xs-12">
                            <input type="text" name="fName" value="{{ Auth::user()->name }}" placeholder="Johnathan Doe" class="form-control form-control-line" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="example-email" class="col-md-12">Email</label>
                          <div class="col-xs-12">
                            <input type="email" name="email" value="{{ Auth::user()->email }}" placeholder="mason@company.com" class="form-control form-control-line" name="example-email" id="example-email" required readonly>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="panel-wrapper collapse in">
                          <div class="panel-body">

                             <label class="control-label">Profill Photo</label>   
                            <div class="row">              
                              <div class="col-sm-3 col-lg-3">                                
                                <input type="file" name="avator" id="input-file-now" name="product_main_image"
                                 @if(isset(Auth::user()->avator)) data-default-file="{{ url(Auth::user()->avator) }}" @endif
                                  placeholder="Select Main Image" class="dropify" />
                                <span class="bg-danger text-info">{{ $errors->has('product_main_image') ? $errors->first('product_main_image') : '' }}</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- <div class="form-group">
                          <label class="col-md-12">Password</label>
                          <div class="col-xs-12">
                            <input type="password" value="password" class="form-control form-control-line" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-12">Phone No</label>
                          <div class="col-xs-12">
                            <input type="text" name="phoneNo" placeholder="123 456 7890" class="form-control form-control-line" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-12">Message</label>
                          <div class="col-xs-12">
                            <textarea rows="5" class="form-control form-control-line" readonly></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-12">Select Country</label>
                          <div class="col-sm-12">
                            <select class="form-control form-control-line" disabled>
                              <option>India</option>
                              <option>London</option>
                              <option>Thailand</option>
                              <option>Usa</option>
                              <option>Canada</option>
                            </select>
                          </div> -->
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <button class="btn btn-success">Update Profile</button>
                          </div>
                        </div>
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row --> 
@endsection

@section('plugjs')

<!-- Init JavaScript --> 
<script src="{{ asset('backend') }}/plugins/assets/js/init.js"></script> 
<script src="{{ asset('backend') }}/plugins/vendors/bower_components/dropify/dist/js/dropify.min.js"></script> 
<script src="{{ asset('backend') }}/plugins/assets/js/dropify.js"></script>
@endsection