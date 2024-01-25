<
@extends('layouts.admin')

@section('title')
Vehicle Create
@endsection


@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Create Vehicle</h1>
                    <span class="h-20px border-gray-200 border-start mx-4"></span>


                </div>
                <div class="d-flex align-items-center py-1">

                </div>
            </div>
        </div>

        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">

                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">Vehicle Details</h3>
                        </div>
                    </div>

                    <div id="kt_account_settings_profile_details" class="collapse show">

                        <form  class="form" action="{{route('admin.vehicle.create')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body border-top p-9">

                                <div class="row mb-6">
                                  {{-- row 1  --}}

                                    <div class="col-lg-4">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Stock Number</span>
                                            </label>

                                            <input value="{{$data->stock_no}}" readonly type="text" class="form-control form-control-solid" placeholder="Enter Stock Number" name="stock_no">
                                            @error('stock_no')
                                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Title</span>
                                            </label>

                                            <input value="{{ old('title') }}" type="text" class="form-control form-control-solid" placeholder="Enter Title" name="title">
                                            @error('title')
                                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">FOB Price</span>
                                            </label>

                                            <input value="{{ old('fob_price') }}" type="number" class="form-control form-control-solid" placeholder="FOB Price" name="fob_price">
                                            @error('fob_price')
                                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                  {{-- end row 1  --}}


                                  {{-- row 2  --}}
                                    <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container" data-select2-id="select2-data-71-8xnb">
                                        <label class="required fs-6 fw-bold mb-2">Status</label>
                                        <select name="status" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member"  data-select2-id="select2-data-10-z8y1" tabindex="-1" aria-hidden="true">
                                            {{-- <option value="" data-select2-id="select2-data-1-cvo7">Select Status...</option> --}}
                                            <option value="0"  @if(old('status')==0) {{'selected'}} @endif data-select2-id="select2-data-1-2">Comming soon</option>
                                            <option value="1" @if(old('status')==1) {{'selected'}} @endif data-select2-id="select2-data-1-3">Now on sale</option>
                                        </select>
                                        @error('status')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container" data-select2-id="select2-data-71-asda">
                                        <label class="required fs-6 fw-bold mb-2">Vehicle Type</label>
                                        <select name="type" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member"  data-select2-id="select2-data-71-asda" tabindex="-1" aria-hidden="true">
                                            {{-- <option value="" data-select2-id="select2-data-2-x">Select Vehicle Type...</option> --}}
                                            @foreach ($data->type as $row)
                                                <option @if(old('type')==$row->id) {{'selected'}} @endif value="{{$row->id}}" data-select2-id="select2-data-2-{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('type')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container" data-select2-id="select2-data-71-3">
                                        <label class="required fs-6 fw-bold mb-2">Body Type</label>
                                        <select name="body_type" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member"  data-select2-id="select2-data-71-3" tabindex="-1" aria-hidden="true">
                                            {{-- <option value="" data-select2-id="select2-data-3-x">Select Body Type...</option> --}}
                                            @foreach ($data->body_type as $row)
                                                <option @if(old('body_type')==$row->id) {{'selected'}} @endif value="{{$row->id}}" data-select2-id="select2-data-3-{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('body_type')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                  {{-- end row 2  --}}

                                  {{-- row 3  --}}

                                    <div class="col-lg-6 mb-8 fv-row fv-plugins-icon-container" data-select2-id="select2-data-71-31">
                                        <label class="required fs-6 fw-bold mb-2">Make</label>
                                        <select name="make" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member"  data-select2-id="select2-data-71-31" tabindex="-1" aria-hidden="true">
                                            @foreach ($data->make as $row)
                                                <option  @if(old('make')==$row->id) {{'selected'}} @endif  value="{{$row->id}}" data-select2-id="select2-data-31-{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('make')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-lg-6 mb-8 fv-row fv-plugins-icon-container" data-select2-id="select2-data-71-5">
                                        <label class="required fs-6 fw-bold mb-2">Model</label>
                                        <select name="model" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member"  data-select2-id="select2-data-71-5" tabindex="-1" aria-hidden="true">
                                            @foreach ($data->model as $row)
                                                <option @if(old('model')==$row->id) {{'selected'}} @endif  value="{{$row->id}}" data-select2-id="select2-data-5-{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('model')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                  {{-- end row 3  --}}

                                  {{-- row 4  --}}

                                    <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container" data-select2-id="select2-data-71-13">
                                        <label class="required fs-6 fw-bold mb-2">Transmission</label>
                                        <select name="transmission" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member"  data-select2-id="select2-data-71-13" tabindex="-1" aria-hidden="true">
                                            @foreach ($data->transmission as $row)
                                                <option @if(old('transmission')==$row->id) {{'selected'}} @endif  value="{{$row->id}}" data-select2-id="select2-data-13-{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('transmission')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container" data-select2-id="select2-data-71-14">
                                        <label class="required fs-6 fw-bold mb-2">Fuel</label>
                                        <select name="fuel" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member"  data-select2-id="select2-data-71-14" tabindex="-1" aria-hidden="true">
                                            @foreach ($data->fuel as $row)
                                                <option @if(old('fuel')==$row->id) {{'selected'}} @endif value="{{$row->id}}" data-select2-id="select2-data-14-{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('fuel')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container" data-select2-id="select2-data-71-24">
                                        <label class="required fs-6 fw-bold mb-2">Exterior Color</label>
                                        <select name="exterior_color" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member"  data-select2-id="select2-data-71-24" tabindex="-1" aria-hidden="true">
                                            @foreach ($data->exterior_color as $row)
                                                <option @if(old('exterior_color')==$row->id) {{'selected'}} @endif value="{{$row->id}}" data-select2-id="select2-data-24-{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('exterior_color')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                  {{-- end row 4  --}}

                                  {{-- row 5  --}}

                                    <div class="col-lg-4">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Chassis Number</span>
                                            </label>

                                            <input value="{{ old('chassis_no') }}" name="chassis_no" type="text" class="form-control form-control-solid" placeholder="Enter Chassis Number">
                                            @error('chassis_no')
                                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container" data-select2-id="select2-data-71-6">
                                        <label class="required fs-6 fw-bold mb-2">Drive</label>
                                        <select name="drive" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member"  data-select2-id="select2-data-71-6" tabindex="-1" aria-hidden="true">
                                            <option @if(old('drive')==0) {{'selected'}} @endif value="0" data-select2-id="select2-data-6-2">Right hand</option>
                                            <option @if(old('drive')==1) {{'selected'}} @endif value="1" data-select2-id="select2-data-6-3">left hand</option>
                                        </select>
                                        @error('drive')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Mileage (km)</span>
                                            </label>

                                            <input value="{{ old('mileage') }}" name="mileage" type="number" class="form-control form-control-solid" placeholder="Enter Mileage">
                                            @error('mileage')
                                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                  {{-- end row 5  --}}

                                  {{-- row 6  --}}
                                    <div class="col-lg-4">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Manufacture Year</span>
                                            </label>

                                            <input value="{{ old('manufacture_year') }}" name="manufacture_year" type="text" class="form-control form-control-solid" placeholder="Enter Manufacture Year">
                                            @error('manufacture_year')
                                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Seating Capacity</span>
                                            </label>

                                            <input value="{{ old('seating_capacity') }}" name="seating_capacity" type="text" class="form-control form-control-solid" placeholder="Enter Seating Capacity">
                                            @error('seating_capacity')
                                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container" data-select2-id="select2-data-71-7">
                                        <label class="required fs-6 fw-bold mb-2">2WD/4WD</label>
                                        <select name="twd_fwd" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member"  data-select2-id="select2-data-71-7" tabindex="-1" aria-hidden="true">
                                            <option @if(old('twd_fwd')==0) {{'selected'}} @endif value="0" data-select2-id="select2-data-7-2">2WD</option>
                                            <option @if(old('twd_fwd')==1) {{'selected'}} @endif value="1" data-select2-id="select2-data-7-3">4WD</option>
                                        </select>
                                        @error('twd_fwd')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                  {{-- end row 6  --}}

                                  {{-- end row 7  --}}

                                    <div class="col-lg-4">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Doors</span>
                                            </label>

                                            <input value="{{ old('doors') }}" name="doors" type="number" class="form-control form-control-solid" placeholder="Enter number of doors" >
                                            @error('doors')
                                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Length (cm)</span>
                                            </label>

                                            <input value="{{ old('length') }}" name="length" type="number" class="form-control form-control-solid" placeholder="Enter Length (cm)" >
                                            @error('length')
                                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Width (cm)</span>
                                            </label>

                                            <input value="{{ old('width') }}" name="width" type="number" class="form-control form-control-solid" placeholder="Enter Width (cm)">
                                            @error('width')
                                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                  {{-- end row 7  --}}

                                  {{-- row 8  --}}

                                    <div class="col-lg-4">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Height (cm)</span>
                                            </label>

                                            <input value="{{ old('height') }}" name="height" type="number" class="form-control form-control-solid" placeholder="Enter Height (cm)">
                                            @error('height')
                                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Weight (Kg)</span>
                                            </label>

                                            <input value="{{ old('weight') }}" name="weight" type="number" class="form-control form-control-solid" placeholder="Enter Weight (Kg)">
                                            @error('weight')
                                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Engine Capacity (CC)</span>
                                            </label>

                                            <input value="{{ old('engine_capacity') }}" name="engine_capacity" type="number" class="form-control form-control-solid" placeholder="Enter Engine Capacity (CC)">
                                            @error('engine_capacity')
                                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                  {{-- end row 8  --}}

                                    <div class="d-flex flex-column mb-8">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Remark</span>
                                        </label>

                                        <textarea name="remark"  class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details">{{ old('remark') }}</textarea>
                                        @error('remark')
                                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                  <div class="separator separator-dashed my-10"></div>

                                  {{-- row 9 --}}

                                    @for ($i=1;$i<7;$i++)
                                        <div class="col-lg-2">
                                            <label class="required fs-6 fw-bold mb-2">Vehicle Image {{$i}}</label>
                                            <div class="form-group">
                                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(/assets/media/avatars/vehicle.png)">
                                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/assets/media/avatars/vehicle.png)"></div>
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input type="file" name="main_image_{{$i}}"  accept=".png, .jpg, .jpeg" />
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
                                    @endfor


                                  {{-- end row 9 --}}

                                  <div class="separator separator-dashed my-10"></div>
                                  {{-- row 10 --}}

                                    <div class="row">
                                        @foreach ($data->accessories as $key => $accessory)
                                            <div class="col-md-3 mb-2">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-check form-check-inline">
                                                            <label class="form-check-label close-label">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="accessory{{ $accessory->id }}" name="option[]"
                                                                    value="{{ $accessory->id }}"
                                                                    > &nbsp;
                                                                {{ $accessory->name }}
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>


                                  {{-- row 10 --}}
                                </div>



                            </div>

                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <a type="reset" class="btn btn-light btn-active-light-primary me-2" href="{{route('page.admin.vehicles')}}">Discard</a>
                                <button type="submit" class="btn btn-primary" >Save Changes</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection


@section('js')

@endsection
