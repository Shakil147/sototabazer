@extends('layouts.app1')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-5 text-center parallax-fade-top subscribe-bg">
      <div class="mt-40">
        <div class="main-title on-dark text-center mb-0"> <a href="index.html" class="text-center db"><img src="{{ asset('backend') }}/plugins/assets/img/logo-dark.png" alt="Home" /><br/>
          <span class="brand-text">[ SOTOTA<strong>BAZAR</strong> ]</span> </a>
          <div class="main-subtitle-bottom smaller mt-10">Register Now!</div>
        </div>
       {!! Form::open(['class'=>'form-horizontal form-material','rout' => 'register','method'=>'post','id'=>'loginform']) !!}
          <div class="form-group mt-20">
            <div class="col-xs-12">
              <div class="input-group"> <span class="input-group-addon b-0  bg-primary" id="basic-addon4"><i class="mdi mdi-account"></i></span>
               <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              </div>
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <div class="input-group"> <span class="input-group-addon b-0  bg-primary" id="basic-addon4"><i class="mdi mdi-email"></i></span>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="email" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <div class="input-group"> <span class="input-group-addon b-0  bg-primary" id="basic-addon4"><i class="mdi mdi-lock"></i></span>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <div class="input-group"> <span class="input-group-addon b-0  bg-primary" id="basic-addon4"><i class="mdi mdi-lock-reset"></i></span>
               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <div class="checkbox checkbox-primary pt-0">
                <input id="checkbox-signup" type="checkbox" required>
                <label for="checkbox-signup"> I agree to all <a href="#">Terms &amp; Conditions</a></label>
              </div>
            </div>
          </div>
          <div class="form-group text-center mt-20">
            <div class="col-xs-12">
              <button class="btn btn-success btn-lg btn-block text-uppercase" type="submit">Sign Up</button>
            </div>
          </div>
          <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
              <p>Already have an account? <a href="{{ route('login') }}" class="text-danger ml-5"><b>Sign In</b></a></p>
            </div>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
