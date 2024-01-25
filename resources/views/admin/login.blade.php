@extends('layouts.auth')

@section('content')

<form class="form w-100" action="{{route('authenticate')}}" method="POST">
    @csrf

    <div class="text-center mb-10">
        <h1 class="text-dark mb-3">Sign In to Heena Publishers</h1>
        {{-- <div class="text-gray-400 fw-bold fs-4">New Here?
            <a href="../../demo1/dist/authentication/layouts/basic/sign-up.html" class="link-primary fw-bolder">Create
                an Account</a>
        </div> --}}
    </div>

    <div class="fv-row mb-10">
        <label class="form-label fs-6 fw-bolder text-dark">Email</label>
        <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off"
            required />
    </div>

    <div class="fv-row mb-10">
        <div class="d-flex flex-stack mb-2">
            <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
            <a href="{{ route('forgot.password.get') }}" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
        </div>

        <input class="form-control form-control-lg form-control-solid" type="password" id="password" name="password"
            autocomplete="off" required />
        <span id="password-visibility" class="fa fa-fw fa-eye password-visibility-icon"></span>
    </div>

    <div class="text-center">
        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
            <span class="indicator-label">Continue</span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
    </div>

</form>

@endsection