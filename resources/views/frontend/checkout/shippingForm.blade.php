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
					<h2 class="modal-title" id="myModalLabel">Shipping Info</h2>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 modal_body_left modal_body_left1">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;"> 
									<div class="col-md-12">
										<div class="facts">
											<div class="register">
	{!! Form::open(['route' => 'checkouk.save.shipping.info','method'=>'post']) !!}		
		<input placeholder="Full Name" name="name" value="{{ $customer->customer_name }}" class="form-control" type="text" style="border-radius: 4px;" required ><br>

		<input placeholder="E-Mail" class="form-control" name="email"  value="{{ $customer->customer_email }}"  type="text" style="border-radius: 4px;" required><br>

		<input placeholder="Phone Number" class="form-control" name="number"  value="{{ $customer->customer_phone_number }}"  type="text" style="border-radius: 4px;" required><br>

		<textarea placeholder="Shipping Info"  name="adress" class="form-control" type="text" style="border-radius: 4px; background-color: #e1e7f2;" required>{{ $customer->customer_address }}</textarea>
		<div class="sign-up">
			<input type="submit" class="col-md-12" style="border-radius: 4px;" value="NEXT"/>
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
			</div>
		</div>


@endsection