@extends('layouts.admin')

@section('title')
Courier City Charges
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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Courier City Charges</h1>
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
                        <h3 class="fw-bolder m-0">Create New Courier City Charge</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">

                    <form class="form" action="{{route('admin.master.courier_city_charge.create')}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="card-body border-top p-9">

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Courier</label>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <select name="courier"
                                                class="form-select form-select-solid select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-placeholder="Select a Courier" data-select2-id="select2-data-71-3"
                                                tabindex="-1" aria-hidden="true">
                                                @foreach ($data->courier as $row)
                                                <option @if(old('courier')==$row->id) {{'selected'}} @endif
                                                    value="{{$row->id}}"
                                                    data-select2-id="select2-data-3-{{$row->id}}">{{$row->courier}}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('courier')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Country</label>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <select id="country" name="country"
                                                class="form-select form-select-solid select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-placeholder="Select a Courier" data-select2-id="select2-data-71-3"
                                                tabindex="-1" aria-hidden="true">
                                                @foreach ($data->country as $row)
                                                <option @if(old('country')==$row->id) {{'selected'}} @endif
                                                    value="{{$row->id}}"
                                                    data-select2-id="select2-data-3-{{$row->id}}">{{$row->country_name}}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('country')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">City</label>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <select id="city" name="city"
                                                class="form-select form-select-solid select2-hidden-accessible"
                                                data-control="select2"
                                                data-placeholder="Select a City" data-select2-id="select2-data-71-3"
                                                tabindex="-1" aria-hidden="true" required>
                                                <option value="">- Select City -</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Delivery Fee (LKR)</label>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input type="number" name="delivery_fee"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Enter Delivery Fee" value="" required />
                                            @error('delivery_fee')
                                            <span class="text-danger ms-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <a type="reset" class="btn btn-light btn-active-light-primary me-2"
                                href="{{route('page.admin.master.courier_city_charge')}}">Discard</a>
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save
                                Changes</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}



@endsection

@section('js')
<script type='text/javascript'>
    $(document).ready(function(){
        getCities()
        // Department Change
        $('#country').change(function(){
            getCities()
            // Department id

        });
    });

    function getCities() {
        var id = $('#country').val();

        // Empty the dropdown
        $('#city').find('option').not(':first').remove();

        // AJAX request
        $.ajax({
            url: 'master-courier_city_charge-get-cities/'+id,
            type: 'get',
            dataType: 'json',
            success: function(response){
                console.log(response);
                var len = 0;
                if(response['data'] != null){
                    len = response['data'].length;
                }

                if(len > 0){
                    // Read data and create <option >
                    for(var i=0; i<len; i++){
                        var id = response['data'][i].id;
                        var name = response['data'][i].city_name;

                        var option = "<option value='"+id+"'>"+name+"</option>";

                        $("#city").append(option);
                    }
                }

            }
        });
    }
</script>
@endsection
