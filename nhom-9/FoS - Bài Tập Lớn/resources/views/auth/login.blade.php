@extends('layouts.auth')

@section('content')

     <div class="container-fluid ">
        <h1 class="text-center" style="border-bottom:2px solid #ccc">FoS - Fun of Study</h1>
    </div>  
<div class="container-fluid ">    
    <form class="form-horizontal" role="form" method="POST" action="{{ url('login') }}" style="border:10px solid #ccc"  >
        {{ csrf_field() }}
      <div class="container">
        <h1 class="text-center"><strong>Đăng nhập</strong></h1>
        <hr>

        <label for="email">{{ __('E-Mail') }}</label>
        <input type="text" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter Email" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <label for="password">{{ __('Password test') }}</label>
        <input type="password" placeholder="Enter Password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

 
        
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">
            {{ __('Remember Me') }}
        </label>

        <div class="clearfix">
          <button type="submit" >Sign Up</button>
        </div>
    
        <h3 class="text-center">hoặc</h3>
        <div class="text-center">
        <a href=""><img src="https://hocmai.vn/loginv2/images/fb.jpg" alt=""></a>
        {{-- <a href="{{ route('oauth2google') }}"><img src="https://hocmai.vn/loginv2/images/google.jpg" alt=""></a> --}}
        <a href=""><img src="https://hocmai.vn/loginv2/images/google.jpg" alt=""></a>
        <a href=""><img src="https://hocmai.vn/loginv2/images/yahoo.jpg" alt=""></a>
        </div>
      </div>
    </form>
</div>
@endsection