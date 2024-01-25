@extends('layouts.auth')

@section('content')

<form class="form w-100" action="{{ route('forgot.password.post') }}" method="POST">
    @csrf

    <div class="text-center mb-10">
        <h1 class="text-dark mb-3">Forgot Password?</h1>
    </div>

    <div class="fv-row mb-10">
        <label class="form-label fs-6 fw-bolder text-dark">Email</label>
        <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
        @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>

    <div class="text-center">
        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
            <span class="indicator-label">Send reset link</span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
    </div>

</form>

@endsection