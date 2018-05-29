@extends('admin.master')

@section('title')
Orders Dashbord
@endsection

@section('minContent')
	<div class="container-fluid"> 
      <!-- Title -->
      <div class="row heading-bg">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h5 class="txt-dark">Sales Analysis</h5>
        </div>
      </div>
      <!-- /Title --> 
      <!-- Row -->
      <div class="row">
        <div class="col-md-4 col-xs-12">
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
                <h6 class="panel-title txt-dark dropdown-toggle pointer" aria-expanded="false" data-toggle="dropdown">Today <span class="caret"></span> </h6>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#">Today</a></li>
                  <li><a href="#">Yesterday</a></li>
                  <li><a href="#">Last Week</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Last Month</a></li>
                </ul>
              </div>
              <div class="pull-right"> <a href="#" class="pull-left refresh" > <i class="mdi mdi-replay"></i> </a> </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div id="sparkline8"></div>
                <div class="clearfix"></div>
                <div class="pull-left text-css"><span>25</span> <small>Sales</small></div>
                <div class="pull-right text-css"> <small>Abandoned carts:</small> <span>7</span></div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xs-12">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Online Visitors</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div id="sparkline10"></div>
                <div class="clearfix"></div>
                <div class="pull-left text-css"><span>32</span> <small>Last 30 Minutes</small></div>
                <div class="pull-right text-css"><small>Total visitors today:</small> <span>52</span></div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xs-12">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Profit per Visitor <small>(Today)</small> </h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div id="sparkline9"></div>
                <div class="clearfix"></div>
                <div class="pull-left text-css"><span>$3.7</span> <small>Today</small> </div>
                <div class="pull-right text-css"><small>Yesterday:</small> <span>$52</span></div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Row --> 
      <!-- Row -->
      <div class="row">
        <div class="col-xs-12">
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
                <h6 class="panel-title txt-dark dropdown-toggle pointer" aria-expanded="false" data-toggle="dropdown">Total Sales <small>(Today)</small> <span class="caret"></span></h6>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#">Today</a></li>
                  <li><a href="#">Yesterday</a></li>
                  <li><a href="#">Last Week</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Last Month</a></li>
                </ul>
              </div>
              <div class="pull-right"> <a href="#" class="pull-left refresh" > <i class="mdi mdi-replay"></i> </a> </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div id="morris-bar-chart"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Row --> 
      <!-- Row -->
      <div class="row">
        <div class="col-md-6 col-xs-12">
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
                <h6 class="panel-title txt-dark dropdown-toggle pointer" aria-expanded="false" data-toggle="dropdown">Top Selling Products <small class="dark">(Today)</small> <span class="caret"></span></h6>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#">Today</a></li>
                  <li><a href="#">Yesterday</a></li>
                  <li><a href="#">Last Week</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Last Month</a></li>
                </ul>
              </div>
              <div class="pull-right"> <a href="#" class="pull-left refresh" > <i class="mdi mdi-replay"></i> </a> </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <ul class="list-inline text-right">
                  <li>
                    <h5><i class="fa fa-circle mr-5 text-inverse"></i>iPhone</h5>
                  </li>
                  <li>
                    <h5><i class="fa fa-circle mr-5 text-info"></i>iPad</h5>
                  </li>
                  <li>
                    <h5><i class="fa fa-circle mr-5 text-success"></i>iPod</h5>
                  </li>
                </ul>
                <div id="morris-area-chart"></div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xs-12 ">
          <div class="panel panel-default card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title txt-dark">Latest Customers</h6>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper">
              <div class="panel-body row pa-0 pb-20">
                <div class="table-wrapper">
                  <div class="table-responsive">
                    <table class="table border-none" id="data_table_employee">
                      <thead>
                        <tr>
                          <th>Customer ID</th>
                          <th>Name</th>
                          <th>Country</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><span class="txt-dark">#123654</span></td>
                          <td>Irina Sampio</td>
                          <td>United States</td>
                          <td><span class="label label-danger">Account Blocked</span></td>
                          <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                        </tr>
                        <tr>
                          <td><span class="txt-dark">#564798</span></td>
                          <td>Michell Mark</td>
                          <td>India</td>
                          <td><span class="label label-default">Offline</span></td>
                          <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                        </tr>
                        <tr>
                          <td><span class="txt-dark">#6547861</span></td>
                          <td>Tom Fiege</td>
                          <td>Romania</td>
                          <td><span class="label label-warning">Away</span></td>
                          <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                        </tr>
                        <tr>
                          <td><span class="txt-dark">#3124564</span></td>
                          <td>James Nolan</td>
                          <td>Belgium</td>
                          <td><span class="label label-success">active</span></td>
                          <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                        </tr>
                        <tr>
                          <td><span class="txt-dark">#7894612</span></td>
                          <td>Chris Jackson</td>
                          <td>Moscow</td>
                          <td><span class="label label-danger">Account Blocked</span></td>
                          <td class="text-center"><a href="javascript:void(0)" class="text-inverse" title="Edit" data-toggle="tooltip"><i class="mdi mdi-lead-pencil"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="mdi mdi-delete"></i></a></td>
                        </tr>
                        <tr>
                          <td><span class="txt-dark">#3579514</span></td>
                          <td>Wanda Runners</td>
                          <td>Texas</td>
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
      </div>
      <!-- /Row --> 
    </div>
@endsection 