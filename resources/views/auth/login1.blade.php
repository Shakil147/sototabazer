@extends('layouts.app1')

@section('content')

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5 text-center parallax-fade-top subscribe-bg">
        <div class="main-title on-dark text-center mb-0"> <a href="index.html" class="text-center db"><img src="{{ asset('backend') }}/plugins/assets/img/logo-dark.png" alt="Home" /><br/>
          <span class="brand-text">[ SOTOTA<strong>BAZAR</strong> ]</span> </a>
          <div class="main-subtitle-bottom smaller mt-10">Welcome back!</div>
        </div>
            {!! Form::open(['class'=>'form-horizontal form-material','rout' => 'login','method'=>'post','id'=>'loginform']) !!}
          <div class="form-group mt-20">
            <div class="col-xs-12">
              <div class="input-group"> <span class="input-group-addon b-0  bg-primary" id="basic-addon4"><i class="mdi mdi-account"></i></span>
                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                 name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
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
                 <input  type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
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
              <div class="checkbox checkbox-primary"> <span class="pull-left">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="checkbox-signup">Remember me</label>
                </span> <a href="{{ route('password.request') }}" class="pull-right"><i class="mdi mdi-lock"></i> Forgot your Password?</a> </div>
            </div>
          </div>
          <div class="form-group text-center mt-20">
            <div class="col-xs-12">
              <button class="btn btn-success btn-lg btn-block text-uppercase" type="submit">Sign In</button>
            </div>
          </div>
          <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
              <p>Don't have an account? <a href="{{ route('register') }}" class="text-danger ml-5"><b>Sign Up</b></a></p>
            </div>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
