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
					<h2 class="modal-title" id="myModalLabel">Payment Info</h2>

				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 modal_body_left modal_body_left1">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;"> 
									<div class="col-md-12">
										<div class="facts">
											<div class="register">
	{!! Form::open(['route' => 'checkouk.save.payment.info','method'=>'post']) !!}	
	<p>Whice Payment Type You Like Most</p><hr>	
		<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="payment_type" id="inlineRadio1" value="COD">
  <label class="form-check-label" for="inlineRadio1">Cash On Delivary</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="payment_type" id="inlineRadio2" value="BIKASH">
  <label class="form-check-label" for="inlineRadio2">Bikash</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="payment_type" id="inlineRadio3" value="ROCKET">
  <label class="form-check-label" for="inlineRadio3">Rocket</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="payment_type" id="inlineRadio4" value="option3" disabled>
  <label class="form-check-label" for="inlineRadio4">Master Card</label>
</div>
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