@extends('layouts.app')
@section('content')

<img class="wave" src="{{ asset('dangnhap/assets/img/wave.png') }}">
	<div class="container">
		<div class="img">
			<img src="{{ asset('dangnhap/assets/img/shop.gif') }}">
		</div>
		<div class="login-content">
        <form method="POST" action="{{ route('login') }}" id="login_form">
        @csrf
				<img src="{{ asset('dangnhap/assets/img/avatar.svg') }}">
				<h2 class="title">{{ __('Đăng Nhập') }}</h2>
                @error('email')
                                        <strong>{{ $message }}</strong>
                                @enderror
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input id="email" placeholder="Địa chỉ email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
           		   </div>
                   
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input id="password"  placeholder="Mật khẩu" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
					<span id="alter">
					<i id="eye" class="far fa-eye-slash hidden"></i>
                    </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            	   </div>
            	</div>
            	<a href="{{ route('password.request') }}">{{ __('Bạn quên mật khẩu?') }}</a>
            	<button type="submit" class="btn btn-primary">
                                    {{ __('Đăng nhập') }}
                                </button>
                                <div class="login_form is_closed">
			<div class="left_side">
				<div class="content">
					<div class="login">
						<div class="social_login">
							<a href="{{url('auth/google')}}" class="google">
                            <i class="fa-brands fa-google"></i>
								<span>Login with Google</span>
							</a>
							<a href="{{url('auth/facebook')}}" class="fb">
                            <i class="fa-brands fa-facebook"></i>
								<span>Login with Facebook</span>
							</a>
							<a href="#" class="tw">
								<i class="fa fa-home"></i>
								<span>Quay về</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
            </form>
        </div>
    </div>
@endsection