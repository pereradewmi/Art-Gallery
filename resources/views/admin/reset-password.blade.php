@extends('layouts.auth')

@section('content')

<form class="form w-100" action="{{ route('reset.password.post') }}" method="POST">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="text-center mb-10">
        <h1 class="text-dark mb-3">Reset Password</h1>
    </div>

    <div class="fv-row mb-10">
        <label class="form-label fs-6 fw-bolder text-dark">Email</label>
        <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
        @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>

    <div class="fv-row mb-10">
        <div class="d-flex flex-stack mb-2">
            <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
        </div>
        <input class="form-control form-control-lg form-control-solid" type="password" id="password" name="password"
            autocomplete="off" />
        <span id="password-visibility" class="fa fa-fw fa-eye password-visibility-icon"></span>
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>

    <div class="fv-row mb-10">
        <div class="d-flex flex-stack mb-2">
            <label class="form-label fw-bolder text-dark fs-6 mb-0">Confirm Password</label>
        </div>
        <input class="form-control form-control-lg form-control-solid" type="password" id="confirm_password" name="password_confirmation"
            autocomplete="off" />
        <span id="confirm-password-visibility" class="fa fa-fw fa-eye password-visibility-icon"></span>
        @if ($errors->has('password_confirmation'))
        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
        @endif
    </div>

    <div class="text-center">
        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
            <span class="indicator-label">Set New Password</span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
    </div>

</form>

@endsection