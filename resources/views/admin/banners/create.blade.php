@extends('layouts.admin')

@section('title')
Banner Create
@endsection


@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Create Banner</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    {{-- <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Account</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Settings</li>
                        <!--end::Item-->
                    </ul> --}}
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">

                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">

                <div class="card mb-5 mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">Banner Details</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <!--begin::Form-->
                        <form  class="form" action="{{route('admin.banners.create')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">
                                <!--begin::Input group-->
                            <div class="row mb-6">

                                   <label class="col-lg-4 col-form-label fw-bold fs-6">Banner Image</label>


                                    <div class="col-lg-8">

                                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(/assets/media/avatars/blank.png)">

                                           <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/assets/media/avatars/blank.png)"></div>

                                          <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                              <i class="bi bi-pencil-fill fs-7"></i>

                                               <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                               <input type="hidden" name="avatar_remove" />

                                            </label>


                                         <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                <i class="bi bi-x fs-2"></i>
                                          </span>


                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>

                                      </div>

                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>

                                   </div>

                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    {{-- <label class="col-lg-4 col-form-label required fw-bold fs-6">Name</label> --}}
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <!--begin::Col-->
                                            {{-- <div class="col-lg-12 fv-row">
                                                <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Name" value="" required/>
                                                @error('name')
                                                    <span class="text-danger ms-1">{{ $message }}</span>
                                                @enderror
                                            </div> --}}

                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                {{-- <div class="row mb-6"> --}}
                                    <!--begin::Label-->
                                    {{-- <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label> --}}
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    {{-- <div class="col-lg-8 fv-row">
                                        <input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" value="" required/>
                                        @error('email')
                                            <span class="text-danger ms-1">{{ $message }}</span>
                                        @enderror
                                    </div> --}}
                                    <!--end::Col-->
                                {{-- </div> --}}


                                {{-- <div class="row mb-6"> --}}
                                    <!--begin::Label-->
                                    {{-- <label class="col-lg-4 col-form-label required fw-bold fs-6">Password</label> --}}
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    {{-- <div class="col-lg-8 fv-row">
                                        <input class="form-control form-control-lg form-control-solid" type="password" id="password" name="password" autocomplete="off" placeholder="Password">
                                        <span id="password-visibility" class="fa fa-fw fa-eye password-visibility-icon"></span>
                                        @error('password')
                                            <span class="text-danger ms-1">{{ $message }}</span>
                                        @enderror
                                    </div> --}}
                                    <!--end::Col-->
                                {{-- </div> --}}
                            </div>
                            <!--end::Card body-->
                            <!--begin::Actions-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <a type="reset" class="btn btn-light btn-active-light-primary me-2" href="{{route('page.admin.banners')}}">Discard</a>
                                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                            </div>
                            <!--end::Actions-->

                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>





@endsection


@section('js')

@endsection
