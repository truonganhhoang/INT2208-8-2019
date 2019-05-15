@extends('layouts.auth')

@section('content')
{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="redirect_url" value="{{ request('redirect_url', '/') }}">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  --}}


     <div class="container-fluid ">
        <h1 class="text-center">FoS - Fun of Study</h1>
    </div>  
    <div class="container-fluid">
    <form method="POST" class="form-horizontal" role="form" action="{{ url('/register') }}" style="border:10px solid #ccc">
    {{ csrf_field() }}
        <input type="hidden" name="redirect_url" value="{{ request('redirect_url', '/') }}">
      <div class="container">
        <h1 class="text-center"><strong>Đăng ký tài khoản</strong></h1>
        <hr>
      
        <label for="name">{{ __('Tên đăng nhập') }}</label>
        <input type="text" id="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="Enter Name" name="name" required autofocus>
            @if ($errors->has('name'))
                <span role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif


        <label for="email">{{ __('Địa chỉ E-Mail') }}</label>
        <input type="text" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter Email" name="email" value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

        <label for="password">{{ __('Mật khẩu') }}</label>
        <input type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter Password" name="password" required>
                                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

        <label for="psw-repeat">{{ __('Nhập lại mật khẩu') }}</label>
        <input type="password" placeholder="Repeat Password" name="password_confirmation" required>
        

        <div class="clearfix">
          <button type="submit" class="signupbtn">Sign Up</button>
        </div>
      </div>
    </form>
</div>
@endsection
