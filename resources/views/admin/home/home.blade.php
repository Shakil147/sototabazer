@extends('admin.master')

@section('title')
Home
@endsection
@section('minContent')
	<div class="container-fluid pt-25"> 
      <!-- Row -->
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="panel panel-default card-view pa-0">
            <div class="panel-wrapper collapse in">
              <div class="panel-body pa-0">
                <div class="sm-data-box">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-6 pl-20 pr-0 data-wrap-left"> <span class="txt-dark block counter"><span class="counter-anim">123,456</span></span> <span class="weight-500 uppercase-font block">TOTAL PROFIT</span> </div>
                      <div class="col-xs-6 text-center  pl-0 pr-0 pt-30 data-wrap-right">
                        <div id="sparkline_3" class="sparkline-w-100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="panel panel-default card-view pa-0">
            <div class="panel-wrapper collapse in">
              <div class="panel-body pa-0">
                <div class="sm-data-box">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-6 pl-20 pr-0 data-wrap-left"> <span class="txt-dark block counter"><span class="counter-anim">12.34</span>%</span> <span class="weight-500 uppercase-font block">ACTIVE USERS </span> </div>
                      <div class="col-xs-6 text-center  pl-0 pr-0  pt-30 data-wrap-right">
                        <div id="sparkline_4" class="sparkline-w-100-h-50"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="panel panel-default card-view pa-0">
            <div class="panel-wrapper collapse in">
              <div class="panel-body pa-0">
                <div class="sm-data-box">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-6 pl-20 pr-0 data-wrap-left"> <span class="txt-dark block counter"><span class="counter-anim">1,234,568</span></span> <span class="weight-500 uppercase-font block">NEW ORDERS </span> </div>
                      <div class="col-xs-6 text-center  pl-0 pr-0 pt-20 data-wrap-right">
                        <div id="e_chart_1" class="h-50"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="panel panel-default card-view pa-0">
            <div class="panel-wrapper collapse in">
              <div class="panel-body pa-0">
                <div class="sm-data-box">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-6 pl-20 pr-0 data-wrap-left"> <span class="txt-dark block counter"><span class="counter-anim">35.13</span>%</span> <span class="weight-500 uppercase-font block">NEW COMMENTS </span> </div>
                      <div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
                        <div class="flot-container h-55">
                          <div id="real_time_chart" class="demo-placeholder"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Row --> 
    <!-- Row-->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
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
                <div class="profile-img-wrap"> <img class="inline-block mb-10" src="{{ asset(Auth::user()->avator) }}" alt="user"/>
                  <div class="fileupload btn btn-default"> <span class="btn-text"><i class="typcn typcn-pencil"></i></span>
                    <input class="upload" type="file">
                  </div>
                </div>
                <h5 class="block mt-5 mb-5 weight-500 capitalize-font txt-primary">{{ Auth::user()->name }}</h5>
                <h6 class="block capitalize-font pb-10">{{ Auth::user()->post }}</h6>
              </div>
              <div class="social-info">
                <!-- <div class="row">
                  <div class="col-xs-4 text-center"> <span class="counts block head-font"><span class="counter-anim">345</span></span> <span class="counts-text block">post</span> </div>
                  <div class="col-xs-4 text-center"> <span class="counts block head-font"><span class="counter-anim">246</span></span> <span class="counts-text block">followers</span> </div>
                  <div class="col-xs-4 text-center"> <span class="counts block head-font"><span class="counter-anim">898</span></span> <span class="counts-text block">tweets</span> </div>
                </div> -->
                <a href="{{ route('profile') }}"><button class="btn btn-primary btn-block  btn-anim mt-10"><i class="fa fa-pencil"></i><span class="btn-text">edit profile</span></button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <div class="panel panel-default card-view panel-refresh">
        <div class="refresh-container">
          <div class="preloader">
            <div class="circles-1">
              <div class="circles-1-center"></div>
              <div class="circles-1"></div>
              <div class="circles-1"></div>
              <div class="circles-1"></div>
              <div class="circles-1"></div>
              <div class="circles-1"></div>
              <div class="circles-1"></div>
            </div>
          </div>
        </div>
        <div class="panel-heading">
          <div class="pull-left">
            <h6 class="panel-title txt-dark">Finance Summary </h6>
          </div>
          <div class="pull-right"> <a href="#" class="pull-left inline-block refresh mr-15"> <i class="mdi mdi-replay"></i> </a> </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper collapse in">
          <div class="panel-body pt-0">
            <div id="e_chart_3" class="h-55-m-25"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <div class="row ad-row--full-height">
        <div class="col-lg-6 col-xs-6">
          <div class="ad-portlet card-view ad-portlet--half-height ad-portlet--border-bottom-success ">
            <div class="ad-portlet__body">
              <div class="ad-widget-1">
                <div class="ad-widget-1__number"> 132 <small>All Sales</small> </div>
                <div id="sparkline_1_1" class="spakline-o-hidden" ></div>
              </div>
            </div>
          </div>
          <div class="ad--space-30"></div>
          <div class="ad-portlet card-view ad-portlet--half-height ad-portlet--border-bottom-brand ">
            <div class="ad-portlet__body">
              <div class="ad-widget-1">
                <div class="ad-widget-1__number"> 321 <small>All Orders</small> </div>
                <div id="sparkline_1"  class="spakline-o-hidden"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6  col-xs-6">
          <div class="ad-portlet card-view ad-portlet--half-height ad-portlet--border-bottom-danger ">
            <div class="ad-portlet__body">
              <div class="ad-widget-1">
                <div class="ad-widget-1__number"> 465 <small>All Transactions</small> </div>
                <div id="sparkline_1_2"  class="spakline-o-hidden"></div>
              </div>
            </div>
          </div>
          <div class="ad--space-30"></div>
          <div class="ad-portlet card-view ad-portlet--half-height ad-portlet--border-bottom-accent ">
            <div class="ad-portlet__body">
              <div class="ad-widget-1">
                <div class="ad-widget-1__number"> 798 <small>All Sales</small> </div>
                <div id="sparkline_1_3"  class="spakline-o-hidden"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <!-- Row --> 
    <!-- Row-->
    <div class="col-lg-6 col-md-12 ">
      <div class="panel panel-default card-view">
        <div class="panel-heading">
          <div class="pull-left">
            <h6 class="panel-title txt-dark">Employees</h6>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper">
          <div class="panel-body row pa-0">
            <div class="table-wrapper">
              <div class="table-responsive">
                <table class="table border-none" id="data_table_employee">
                  <thead>
                    <tr>
                      <th>Employee ID</th>
                      <th>Name</th>
                      <th>Department</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="txt-dark">#123654</span></td>
                      <td>Irina Sampio</td>
                      <td>Chart Analyst</td>
                      <td><span class="label label-danger">Terminated</span></td>
                      <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                    </tr>
                    <tr>
                      <td><span class="txt-dark">#564798</span></td>
                      <td>Michell Mark</td>
                      <td>Design Lead</td>
                      <td><span class="label label-warning">Offline</span></td>
                      <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                    </tr>
                    <tr>
                      <td><span class="txt-dark">#6547861</span></td>
                      <td>Tom Fiege</td>
                      <td>UI Development</td>
                      <td><span class="label label-danger">Terminated</span></td>
                      <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                    </tr>
                    <tr>
                      <td><span class="txt-dark">#3124564</span></td>
                      <td>James Nolan</td>
                      <td>Programming</td>
                      <td><span class="label label-success">active</span></td>
                      <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                    </tr>
                    <tr>
                      <td><span class="txt-dark">#7894612</span></td>
                      <td>Chris Jackson</td>
                      <td>Finance</td>
                      <td><span class="label label-success">active</span></td>
                      <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                    </tr>
                    <tr>
                      <td><span class="txt-dark">#3579514</span></td>
                      <td>Wanda Runners</td>
                      <td>Accounting</td>
                      <td><span class="label label-success">active</span></td>
                      <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 pl-0 pr-0 col-xs-12 widget-penal">
      <div class="col-md-7 col-xs-12">
        <div class="panel panel-default card-view widget-weather">
          <div class="panel-heading">
            <div class="pull-left">
              <h6 class="panel-title txt-dark">Today's Weather</h6>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-wrapper">
            <div class="panel-body row pa-0">
              <div class="col-xs-12 ">
                <div class="row mt-20">
                  <div class="col-lg-5">
                    <h4 class="no-margin">Monday</h4>
                    <p class="small hint-text">9th March 2018</p>
                  </div>
                  <div class="col-lg-7">
                    <div class="pull-left">
                      <p class="small hint-text no-margin">Currently</p>
                      <h4 class="text-danger bold no-margin">32° <span class="small">/ 30C</span> </h4>
                    </div>
                    <div class="pull-right">
                      <canvas height="64" width="64" class="clear-day"></canvas>
                    </div>
                  </div>
                </div>
                <h5>Feels like <span class="semi-bold">rainy</span> </h5>
                <p>Weather information</p>
                <div class="widget-weather">
                  <div class="col-xs-6 pt-10 pl-0">
                    <div class="row">
                      <div class="col-lg-12">
                        <p class="pull-left txt-dark">Wind</p>
                        <p class="pull-right bold">11km/h</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <p class="pull-left txt-dark">Sunrise</p>
                        <p class="pull-right bold">05:20</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <p class="pull-left txt-dark">Humidity</p>
                        <p class="pull-right bold">20%</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <p class="pull-left txt-dark">Precipitation</p>
                        <p class="pull-right bold">60%</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-6  pt-10 pl-10">
                    <div class="row">
                      <div class="col-lg-12">
                        <p class="pull-left txt-dark">Sunset</p>
                        <p class="pull-right bold">21:05</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <p class="pull-left txt-dark">Visibility</p>
                        <p class="pull-right bold">21km</p>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="mt-10 timeslot">
                  <div class="col-xs-2 pt-15 pb-15 text-center">
                    <p class="small">13:30</p>
                    <canvas height="25" width="25" class="partly-cloudy-day"></canvas>
                    <p class="text-danger bold">30°C</p>
                  </div>
                  <div class="col-xs-2 pt-15 pb-15 text-center">
                    <p class="small">14:00</p>
                    <canvas height="25" width="25" class="cloudy"></canvas>
                    <p class="text-danger bold">30°C</p>
                  </div>
                  <div class="col-xs-2 pt-15 pb-15 text-center">
                    <p class="small">14:30</p>
                    <canvas height="25" width="25" class="rain"></canvas>
                    <p class="text-danger bold">30°C</p>
                  </div>
                  <div class="col-xs-2 pt-15 pb-15 text-center">
                    <p class="small">15:00</p>
                    <canvas height="25" width="25" class="sleet"></canvas>
                    <p class="text-danger bold">30°C</p>
                  </div>
                  <div class="col-xs-2 pt-15 pb-15 text-center">
                    <p class="small">15:30</p>
                    <canvas height="25" width="25" class="snow"></canvas>
                    <p class="text-danger bold">30°C</p>
                  </div>
                  <div class="col-xs-2 pt-15 pb-15 text-center">
                    <p class="small">16:00</p>
                    <canvas height="25" width="25" class="wind"></canvas>
                    <p class="text-danger bold">30°C</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-xs-12 pr-0">
        <div class="panel panel-default card-view widget-weather">
          <div class="panel-heading">
            <div class="pull-left">
              <h6 class="panel-title txt-dark">Upcoming</h6>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-wrapper">
            <div class="panel-body row pa-0">
              <div class="col-xs-12 ">
                <div class="">
                  <div class="forecast-day col-lg-6 text-center mt-0 ">
                    <div class="bg-master-lightest pb-10 pt-10">
                      <h4 class="pt-10 no-margin">Tuesday</h4>
                      <p class="small hint-text mb-20">11th March 2018</p>
                      <canvas class="rain" width="64" height="64"></canvas>
                      <h5 class="text-danger">32°</h5>
                      <p>Feels like <span class="bold">sunny</span> </p>
                      <p class="small">Wind <span class="bold pl-20">11km/h</span> </p>
                      <div class="mt-25 mb-15 block">
                        <div class="padding-10">
                          <div class="row">
                            <div class="col-lg-6 text-center">
                              <p class="small">Noon</p>
                              <canvas class="sleet" width="25" height="25"></canvas>
                              <p class="text-danger bold">30°C</p>
                            </div>
                            <div class="col-lg-6 text-center">
                              <p class="small">Night</p>
                              <canvas class="wind" width="25" height="25"></canvas>
                              <p class="text-danger bold">30°C</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 text-center mt-0 ">
                    <div class="bg-master-lightest pb-10 pt-10">
                      <h4 class="pt-10 no-margin">Wednesday</h4>
                      <p class="small hint-text mb-20">11th March 2018</p>
                      <canvas class="rain" width="64" height="64"></canvas>
                      <h5 class="text-danger">32°</h5>
                      <p>Feels like <span class="bold">sunny</span> </p>
                      <p class="small">Wind <span class="bold pl-20">11km/h</span> </p>
                      <div class="mt-25 mb-15 block">
                        <div class="padding-10">
                          <div class="row">
                            <div class="col-lg-6 text-center">
                              <p class="small">Noon</p>
                              <canvas class="sleet" width="25" height="25"></canvas>
                              <p class="text-danger bold">30°C</p>
                            </div>
                            <div class="col-lg-6 text-center">
                              <p class="small">Night</p>
                              <canvas class="wind" width="25" height="25"></canvas>
                              <p class="text-danger bold">30°C</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
@endsection

@section('plugjs')
<!-- <script src="{{ asset('backend') }}/plugins/assets/js/init.js"></script>
 --><script src="{{ asset('backend') }}/plugins/assets/js/dashboard.init.js"></script>
@endsection