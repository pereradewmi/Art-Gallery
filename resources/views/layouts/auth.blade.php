<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<head>
	<base href="../../../">
	<title>Heena Publishers (Pvt) Ltd. - Login</title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<link rel="canonical" href="" />
	<link rel="shortcut icon" href="{{ asset('assets/new-favicon.ico') }}" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->

<body id="kt_body" class="bg-body">
	<div class="d-flex flex-column flex-root">
		{{-- <div
			class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
			style="background-image: url(/assets/media/illustrations/sketchy-1/14.png"> --}}
			<div
				class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">

				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<a href="{{ route('login') }}" class="mb-12">
						<img alt="Logo" src="{{ asset('assets/new-logo.png') }}" class="h-100px" />
					</a>

					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						@yield('content')
					</div>
				</div>

				<div class="d-flex flex-center flex-column-auto p-10">
					<div class="d-flex align-items-center fw-bold fs-6">
						<a href="https://www.enricharcane.com" class="text-muted text-hover-primary px-2">Powered by
							Enrich Arcane</a>
					</div>
				</div>
			</div>
		</div>

		<script>
			var hostUrl = "/assets/";
		</script>

		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>

		{{-- show/hide password --}}
		<script>
			const togglePassword = document.querySelector('#password-visibility');
			const password = document.querySelector('#password');
			
			togglePassword.addEventListener('click', function (e) {
			// toggle the type attribute
			const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
			password.setAttribute('type', type);
			// toggle the eye slash icon
			this.classList.toggle('fa-eye-slash');
			});
		</script>

		<script>
			const toggleConfirmPassword = document.querySelector('#confirm-password-visibility');
				const confirmPassword = document.querySelector('#confirm_password');
				
				toggleConfirmPassword.addEventListener('click', function (e) {
				// toggle the type attribute
				const type2 = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
				confirmPassword.setAttribute('type', type2);
				// toggle the eye slash icon
				this.classList.toggle('fa-eye-slash');
				});
		</script>

		@if(session('error'))
		<script>
			let run = true
                if(run){
                    Swal.fire({
                        text: "{{session('error')}}",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                    run = false
                }
		</script>
		{{session()->forget('error')}}
		@endif

		@if(session('success'))
		<script>
			let run = true
                if(run){
                    Swal.fire({
                        text: "{{session('success')}}",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                    run = false
                }
		</script>
		{{session()->forget('success')}}
		@endif

</body>

</html>