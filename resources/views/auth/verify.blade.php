@extends('layouts.app')

@section('content')
<!-- <img class="wave" src="{{ asset('dangnhap/assets/img/wave.png') }}"> -->
	<div class="container">
		<div class="img">
			<img src="{{ asset('dangnhap/assets/img/verif.gif') }}">
		</div>
		<div class="login-content">
        <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
				<img src="{{ asset('dangnhap/assets/img/avatar.svg') }}">
				<h2 class="title">{{ __('Xác minh địa chỉ email') }}</h2>
                   @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Một liên kết xác minh mới đã được gửi đến địa chỉ email của bạn.') }}
                        </div>
                    @endif
                    {{ __('Trước khi tiếp tục, vui lòng kiểm tra email của bạn để biết liên kết xác minh.') }}
                    <hr>
                    <br>
                    {{ __('Nếu bạn không nhận được email') }}
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Bấm vào đây để yêu cầu lại') }}</button>.
                    </form>
                </div>
           		</div>
            </form>
        </div>
    </div>
@endsection