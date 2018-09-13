@extends('frontend.master')
@section('title')
Login
@endsection
@section('body')

<body class="res layout-subpage layout-1 banners-effect-5">
    <div id="wrapper" class="wrapper-fluid">
    	
@endsection

@section('mainContainer')

<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="{{ route('home.page') }}"><i class="fa fa-home"></i></a></li>
			<li><a href="{{ route('account.login') }}">Account</a></li>
			<li><a href="{{ route('account.login') }}">Login</a></li>
		</ul>
		
		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="page-login">
				
					<div class="account-border">
						<div class="row">
							<div class="col-sm-6 new-customer">
								<div class="well">
									<h2><i class="fa fa-file-o" aria-hidden="true"></i> New Customer</h2>
									<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
								</div>
								<div class="bottom-form">
									<a href="{{ route('account.register') }}" class="btn btn-default pull-right">Creat an account</a>
								</div>
							</div>
							
							{!! Form::open(['class'=>'form-horizontal login','route' => 'account-login','method'=>'post','enctype'=>'multipart/form-data']) !!}
								<div class="col-sm-6 customer-login">
									<div class="well">
										<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Returning Customer</h2>
										<p><strong id="loginMessage" class="text-warning"></strong></p>
										<div class="form-group">
											<label class="control-label " for="input-email" >E-Mail Address</label>
											<input type="text" name="email" value="" id="email" class="form-control" />
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">Password</label>
											<input type="password" name="password" value="" id="password" class="form-control" />
										</div>
									</div>
									<div class="bottom-form">
										<a href="#" class="forgot">Forgotten Password</a>
										<input type="submit" value="Login" class="btn btn-default pull-right" />
									</div>
								</div>
							{{ Form::close() }}
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	@endsection

@section('plgin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){    	

        $("form.login").submit(function(e) {
		    e.preventDefault(); 
		    var formData = {
			    email: $('#email').val(),
			    password: $('#password').val(),
			    _token: "{{ csrf_token() }}"
			}

            console.log("submit prevented");
            console.log(formData);
             $.ajax({
                type:'POST',
                url:'{!!URL::to('/account-login')!!}',
                data: formData, 
           success:function(response){
           	if (response == "success") {
           		/*$('#up_zilla').append('<option value="0" disable="true" selected="true">=== Select  Up-Zilla ===</option>');*/
               location.reload();
            }
	            if (response == "wrongPassword") {
	              $("#loginMessage").html("Incorrect Password");
	            }
	            if (response == "wrongEmail") {
	              $("#loginMessage").html("Incorrect Email");
	            }
    		}, 
	        error:function(){

	        	}
        });
        });
    });
</script>

@endsection