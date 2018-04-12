@extends('layouts.app1')
@section('title')
REGISTER
@endsection

@section('content')  
            
<div class="content2">
    <div class="grids-heading gallery-heading signup-heading">
        <h2>Sotatabazar Login</h2>
    </div>
    <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="email" name="email" value="EMAIL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

            </div>
            <div class="form-group">
                <input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">

                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="checkbox" style="float: left;
             padding-left: 50px;
             margin-top: 1px;
             margin-bottom: -60px; ">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
            </div>
                
        <input type="submit" class="register" value="Login">
    </form>
    <div class="signin-text">
        <div class="text-left">
            <p><a href="{{ route('password.request') }}"> Forgot Password? </a></p>
        </div>
        <div class="text-right">
            <p><a href="{{ url('/register') }}"> Create New Account</a></p>
        </div>
        <div class="clearfix"> </div>
    </div>                
    <a href="{{ url('/') }}">Back To Home</a>
</div>
 @endsection
