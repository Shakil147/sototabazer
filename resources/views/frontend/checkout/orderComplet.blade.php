@extends('frontend.master')
@section('title')
Single Prodects
@endsection


@section('content')
<style>
	body{
		background-color: #f2ffe6;
	}
</style>
		<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="{{ asset('frontend')}}/index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Showping Info</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->  

	<div class="container" style="padding-bottom: 50px; padding-top: 30px;">

			<div class="modal-content" >
				<div class="modal-header" style="padding-top: 30px; text-align: center;">
					<h2 class="modal-title" id="myModalLabel">Order Submited</h2>

				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 modal_body_left modal_body_left1">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;"> 
									<div class="col-md-12">
										<h4 style="text-align: center;">
											Dear sir, we get yor order. <br> Very soon we will contact with you. Thank you.
										</h4>
									</div> 			        					            	      
								</div>	
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>


@endsection