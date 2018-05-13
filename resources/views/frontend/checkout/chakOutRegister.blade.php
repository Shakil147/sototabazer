@extends('frontend.master')
@section('title')
Register
@endsection
@section('body')

<body class="res layout-subpage layout-1 banners-effect-5">
    <div id="wrapper" class="wrapper-fluid">
    	
@endsection

@section('mainContainer')

<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="{{ route('home.page') }}"><i class="fa fa-home"></i></a></li>
			<li><a href="{{ route('checkout') }}">Account</a></li>
			<li><a href="{{ route('checkout.register') }}">Register</a></li>
		</ul>
		
		<div class="row">
			<div id="content" class="col-sm-12">
				<h2 class="title">Register Account</h2>
				<p>If you already have an account with us, please login at the <a href="{{ route('checkout.login') }}">login page</a>.</p>
			{!! Form::open(['class'=>'form-horizontal account-register clearfix','route' => 'account-register','method'=>'post']) !!}
			<div class="row">
				<div class="col-md-6">
					<fieldset id="account">
						<legend>Your Personal Details</legend>
						
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-firstname">First Name</label>
							<div class="col-sm-10">
								<input type="text" name="first_name" value="{{ Request::old('first_name') }}" placeholder="First Name" id="input-firstname" class="form-control">
								<span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : '' }}</span>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
							<div class="col-sm-10">
								<input type="text" name="last_name" value="{{ Request::old('last_name') }}" placeholder="Last Name" id="input-lastname" class="form-control">
								<span class="text-danger">{{ $errors->has('last_name') ? $errors->first('last_name') : '' }}</span>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
							<div class="col-sm-10">
								<input type="email" name="email" value="{{ Request::old('email') }}" placeholder="E-Mail" id="input-email" class="form-control" >
								<span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
							<div class="col-sm-10">
								<input type="tel" name="phone_no" value="{{ Request::old('phone_no') }}" placeholder="Telephone" id="input-telephone" class="form-control" >
								<span class="text-danger">{{ $errors->has('phone_no') ? $errors->first('phone_no') : '' }}</span>
							</div>
						</div>
						<div>
					</fieldset>
					<fieldset>
						<legend>Your Password</legend>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-password">Password</label>
							<div class="col-sm-10">
								<input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" >
								<span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
							<div class="col-sm-10">
								<input type="password" name="password_confirmation" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
								<span class="text-danger">{{ $errors->has('password_confirmation') ? $errors->first('password_confirmation') : '' }}</span>
							</div>
						</div>
					</fieldset>
				</div>							
			
			<div class="col-md-6">		
					<fieldset id="address">
						<legend>Your Address</legend>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-address-1">Address 1</label>
							<div class="col-sm-10">
								<input type="text" name="address_1" value="{{ Request::old('address_1') }}" placeholder="Address 1" id="input-address-1" class="form-control">
								<span class="text-danger">{{ $errors->has('address_1') ? $errors->first('address_1') : '' }}</span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="input-address-2">Address 2</label>
							<div class="col-sm-10">
								<input type="text" name="address_2" value="{{ Request::old('address_2') }}" placeholder="Address 2" id="input-address-2" class="form-control" >
								<span class="text-danger">{{ $errors->has('address_2') ? $errors->first('address_2') : '' }}</span>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-city">Districts</label>
								<div class="col-sm-10">
								<select name="zilla_id" id="zilla_dropdown" class="form-control" required>
									<option value="" selected="true">=== Select Districts ===</option>
									@foreach($districts as $district)
									<option value="{{ $district->id }}">{{ $district->name }}</option>
								  @endforeach
								</select>
								<span class="text-danger">{{ $errors->has('zilla_id') ? $errors->first('zilla_id') : '' }}</span>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-city">Up-Zilla</label>
								<div class="col-sm-10">
								<select name="up_zilla_id" id="up_zilla" class="form-control name" required></select>
								<span class="text-danger">{{ $errors->has('up_zilla_id') ? $errors->first('up_zilla_id') : '' }}</span>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
							<div class="col-sm-10">
								<input type="text" name="postcode" value="{{ Request::old('postcode') }}" placeholder="Post Code" id="input-postcode" class="form-control">
								<span class="text-danger">{{ $errors->has('postcode') ? $errors->first('postcode') : '' }}</span>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-country">Country</label>
							<div class="col-sm-10">
								<select name="country" id="input-country" class="form-control">
									<option value="Bangladesh">Bangladesh</option>
								</select>
								<span class="text-danger">{{ $errors->has('country') ? $errors->first('country') : '' }}</span>
							</div>
						</div>
					</fieldset>
				</div>
				<div class="col-md-8 col-md-offset-2">	
					<div class="buttons">
						<div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Pricing Tables</b></a>
							<input class="box-checkbox" type="checkbox" name="agree" value="1" required> &nbsp;
							<input type="submit" value="Continue" class="btn btn-primary">
						</div>
					</div>
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection

@section('plgin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){    	

        $(document).on('change','#zilla_dropdown',function(){        	
            //console.log("hmm its change with id");
           var zilla_id=$(this).val();
             //console.log(zilla_id);
             var div=$(this).parent();
             var op=" ";
             $.ajax({
                type:'get',
                url:'{!!URL::to('upaZilas')!!}',
                data:{'id':zilla_id}, 
           success:function(data){
	          console.log(data);

	          $('#up_zilla').empty();
	          $('#up_zilla').append('<option value="0" disable="true" selected="true">=== Select  Up-Zilla ===</option>');

	          $.each(data, function(index, regenciesObj){
	            $('#up_zilla').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.name +'</option>');
	          })
    		}, 
	        error:function(){

	        	}
        });
        });
    });
</script>
@endsection