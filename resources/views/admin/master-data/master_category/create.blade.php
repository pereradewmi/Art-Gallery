@extends('layouts.admin')

@section('title')
Category
@endsection


@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Categories</h1>

                <span class="h-20px border-gray-200 border-start mx-4"></span>

            </div>
            <div class="d-flex align-items-center py-1">

            </div>
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
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                    aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Create New Category</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">

                    <form class="form" action="{{route('admin.master.master_category.create')}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="card-body border-top p-9">

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Category Name</label>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" name="name"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Category" value="" required />
                                            @error('name')
                                            <span class="text-danger ms-1">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <a type="reset" class="btn btn-light btn-active-light-primary me-2"
                                href="{{route('page.admin.master.master_category')}}">Discard</a>
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save
                                Changes</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


