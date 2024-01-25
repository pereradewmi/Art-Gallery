@extends('layouts.master')

@section('title')
My Profile
@endsection

@section('content')

<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a class="active" href="#">My Profile</a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>My Profile</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="main-content-area clearfix">
    <section class="section-padding no-top gray">
        <div class="container">

            {{-- <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <section class="search-result-item">
                        <a class="image-link" href="#"><img class="image center-block" alt="" src="images/users/9.jpg">
                        </a>
                        <div class="search-result-item-body">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <h4 class="search-result-item-heading"><a href="#">Umair</a></h4>
                                    <p class="info">
                                        <span><a href="profile.html"><i class="fa fa-user "></i>Profile </a></span>
                                        <span><a href="javascript:void(0)"><i class="fa fa-edit"></i>Edit Profile
                                            </a></span>
                                    </p>
                                    <p class="description">You last logged in at: 14-01-2017 6:40 AM [ USA time (GMT +
                                        6:00hrs)</p>
                                    <span class="label label-warning">Paid Package</span>
                                    <span class="label label-success">Dealer</span>
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="row ad-history">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="user-stats">
                                                <h2>374</h2>
                                                <small>Ad Sold</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="user-stats">
                                                <h2>980</h2>
                                                <small>Total Listings</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="user-stats">
                                                <h2>413</h2>
                                                <small>Favourites Ads</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div> --}}


            <div class="row margin-top-40">

                <div class="col-md-12 col-xs-12 col-sm-12">

                    <div class="profile-section margin-bottom-20">
                        <div class="profile-tabs">
                            <div class="tab-content">
                                <div class="profile-edit tab-pane fade in active" id="edit">
                                    <h2 class="heading-md">Manage your Security Settings</h2>
                                    <p>Manage Your Account</p>
                                    <div class="clearfix"></div>
                                    <form method="POST" action="{{ route('customer.update-profile') }}">
                                        @csrf

                                        <div class="row">
                                            <input type="hidden" class="form-control margin-bottom-20" id="customer_id"
                                                name="customer_id" value="{{ $customer->id }}">

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>First Name <span class="color-red">*</span></label>
                                                <input type="text" class="form-control margin-bottom-20"
                                                    name="first_name" value="{{ $customer->first_name }}" required>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Last Name <span class="color-red">*</span></label>
                                                <input type="text" class="form-control margin-bottom-20"
                                                    name="last_name" value="{{ $customer->last_name }}" required>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Email <span class="color-red">*</span></label>
                                                <input type="text" class="form-control margin-bottom-20" name="email"
                                                    value="{{ $customer->email }}" required>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Password</label>
                                                <input type="password" class="form-control margin-bottom-20"
                                                    name="password">
                                            </div>

                                            <div class="col-md-2 col-sm-12 col-xs-12 margin-bottom-20">
                                                <label>Country Code<span class="color-red">*</span></label>
                                                <select class="form-control" name="contact_no_personal_country_code">
                                                    @foreach ($countries as $country)
                                                    <option value="{{ $country->country_code }}" @if($customer->
                                                        contact_no_personal_country_code==$country->country_code)
                                                        {{'selected'}}
                                                        @endif>{{
                                                        $country->country_code }} - {{
                                                        $country->country_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <label>Contact No (Personal)<span class="color-red">*</span></label>
                                                <input type="text" class="form-control margin-bottom-20"
                                                    id="personalContactNo" name="contact_no_personal"
                                                    value="{{ $customer->contact_no_personal }}" placeholder=""
                                                    required>
                                                {{-- <span id="personal-error-message" class="text-danger"></span> --}}
                                            </div>


                                            <div class="col-md-2 col-sm-12 col-xs-12 margin-bottom-20">
                                                <label>Country Code<span class="color-red">*</span></label>
                                                <select class="form-control" name="contact_no_office_country_code">
                                                    @foreach ($countries as $country)
                                                    <option value="{{ $country->country_code }}" @if($customer->
                                                        contact_no_office_country_code==$country->country_code)
                                                        {{'selected'}}
                                                        @endif>{{
                                                        $country->country_code }} - {{
                                                        $country->country_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <label>Contact No (Office)<span class="color-red">*</span></label>
                                                <input type="text" class="form-control margin-bottom-20"
                                                    id="workingContactNo" name="contact_no_office"
                                                    value="{{ $customer->contact_no_office }}" placeholder="">
                                                {{-- <span id="working-error-message" class="text-danger"></span> --}}
                                            </div>


                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <h4><b>Billing Information</b></h4>

                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12 col-xs-12 margin-bottom-20">
                                                        <label>Country <span class="color-red">*</span></label>
                                                        <select class="form-control" id="billing_address_country"
                                                            name="billing_address_country">
                                                            @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}" @if($customer->
                                                                billing_address_country_id==$country->id) {{'selected'}}
                                                                @endif>{{
                                                                $country->country_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <label>Address Line 1 <span class="color-red">*</span></label>
                                                        <input type="text" class="form-control margin-bottom-20"
                                                            name="billing_address_street_address_line_1"
                                                            value="{{ $customer->billing_address_street_address_line_1 }}"
                                                            placeholder="" required>

                                                    </div>
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <label>Address Line 2<span class="color-red"></span></label>
                                                        <input type="text" class="form-control margin-bottom-20"
                                                            name="billing_address_street_address_line_2"
                                                            value="{{ $customer->billing_address_street_address_line_2 }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <label>City</label>
                                                        <select class="form-control" id="billing_address_city"
                                                            name="billing_address_city">
                                                            <option value="">- Select City -</option>
                                                            @foreach ($cities as $city)
                                                            <option value="{{ $city->id }}" @if($customer->
                                                                billing_address_city_id==$city->id) {{'selected'}}
                                                                @endif>{{
                                                                $city->city_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <label>State <span class="color-red">*</span></label>
                                                        <input type="text" class="form-control margin-bottom-20"
                                                            name="billing_address_state"
                                                            value="{{ $customer->billing_address_state }}" required>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <label>Zip Code <span class="color-red">*</span></label>
                                                        <input type="text" class="form-control margin-bottom-20"
                                                            name="billing_address_zip_code"
                                                            value="{{ $customer->billing_address_zip_code }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <h4> <b>Shipping Information</b></h4>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12 col-xs-12 margin-bottom-20">
                                                        <label>Country <span class="color-red">*</span></label>
                                                        <select class="form-control" id="shipping_address_country"
                                                            name="shipping_address_country">
                                                            @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}" @if($customer->
                                                                shipping_address_country_id==$country->id)
                                                                {{'selected'}}
                                                                @endif>{{
                                                                $country->country_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <label>Address Line 1 <span class="color-red">*</span></label>
                                                        <input type="text" class="form-control margin-bottom-20"
                                                            name="shipping_address_street_address_line_1"
                                                            value="{{ $customer->shipping_address_street_address_line_1 }}"
                                                            placeholder="" required>

                                                    </div>
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <label>Address Line 2<span class="color-red"></span></label>
                                                        <input type="text" class="form-control margin-bottom-20"
                                                            name="shipping_address_street_address_line_2"
                                                            value="{{ $customer->shipping_address_street_address_line_2 }}"
                                                            placeholder="">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <label>City</label>
                                                        <select class="form-control" id="shipping_address_city"
                                                            name="shipping_address_city">
                                                            <option value="">- Select City -</option>
                                                            @foreach ($cities as $city)
                                                            <option value="{{ $city->id }}" @if($customer->
                                                                shipping_address_city_id==$city->id) {{'selected'}}
                                                                @endif>{{
                                                                $city->city_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <label>State <span class="color-red">*</span></label>
                                                        <input type="text" class="form-control margin-bottom-20"
                                                            name="shipping_address_state"
                                                            value="{{ $customer->shipping_address_state }}" required>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <label>Zip Code <span class="color-red">*</span></label>
                                                        <input type="text" class="form-control margin-bottom-20"
                                                            name="shipping_address_zip_code"
                                                            value="{{ $customer->shipping_address_zip_code }}" required>
                                                    </div>

                                                </div>

                                            </div>
                                            {{--
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label>Shipping Address <span class="color-red">*</span></label>
                                                <input type="text" class="form-control margin-bottom-20"
                                                    name="shipping_address" value="{{ $customer->shipping_address }}"
                                                    required>
                                            </div> --}}
                                        </div>

                                        {{-- <div class="row margin-bottom-20">
                                            <div class="form-group">
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <span class="btn btn-default btn-file">
                                                                Browse… <input type="file" id="imgInp">
                                                            </span>
                                                        </span>
                                                        <input type="text" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <img id="img-upload" class="img-responsive" src="images/users/2.jpg"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="clearfix"></div>
                                        <div class="row">
                                            {{-- <div class="col-md-8 col-sm-8 col-xs-12">
                                                <div class="form-group">
                                                    <div class="skin-minimal">
                                                        <ul class="list">
                                                            <li>
                                                                <input type="checkbox" id="minimal-checkbox-7">
                                                                <label for="minimal-checkbox-7">i agree <a
                                                                        href="#">Terms of Services</a></label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                                <button type="submit" class="btn btn-theme btn-sm">Update My
                                                    Info</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Function to validate phone numbers
                    // Function to validate phone numbers
function validatePhoneNumber(inputId, errorMessageId) {
    var input = document.getElementById(inputId);
    var errorMessage = document.getElementById(errorMessageId);
    var regex = /^\+\d{1,3}\s?\d{9,}$/; // Matches + followed by 1 to 3 digits (country code) and at least 9 digits (phone number)

    if (regex.test(input.value) && input.value.charAt(1) !== '0') {
        // Valid input, clear error message
        errorMessage.innerHTML = '<span style="color: green;">Correct format</span>';
    } else {
        // Invalid input, display error message
        errorMessage.innerHTML = '<span style="color: red;">Invalid format. Please enter a valid phone number.</span>';
    }
}

// Event listeners for input change
var personalContactNoInput = document.getElementById('personalContactNo');
var workingContactNoInput = document.getElementById('workingContactNo');

personalContactNoInput.addEventListener('input', function() {
    validatePhoneNumber('personalContactNo', 'personal-error-message');
});

workingContactNoInput.addEventListener('input', function() {
    validatePhoneNumber('workingContactNo', 'working-error-message');
});


                    // // Event listeners for input change
                    // var personalContactNoInput = document.getElementById('personalContactNo');
                    // var workingContactNoInput = document.getElementById('workingContactNo');

                    // personalContactNoInput.addEventListener('input', function() {
                    //     validatePhoneNumber('personalContactNo', 'personal-error-message');
                    // });

                    // workingContactNoInput.addEventListener('input', function() {
                    //     validatePhoneNumber('workingContactNo', 'working-error-message');
                    // });
    </script>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type='text/javascript'>
    $(document).ready(function(){

    // Department Change
    $('#billing_address_country').change(function(){

         // Department id
         var id = $(this).val();

         // Empty the dropdown
         $('#billing_address_city').find('option').not(':first').remove();

         // AJAX request
         $.ajax({
             url: 'get-cities/'+id,
             type: 'get',
             dataType: 'json',
             success: function(response){

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

                           $("#billing_address_city").append(option);
                      }
                 }

             }
         });
    });
});
</script>


<script type='text/javascript'>
    $(document).ready(function(){

    // Department Change
    $('#shipping_address_country').change(function(){

         // Department id
         var id = $(this).val();

         // Empty the dropdown
         $('#shipping_address_city').find('option').not(':first').remove();

         // AJAX request
         $.ajax({
             url: 'get-cities/'+id,
             type: 'get',
             dataType: 'json',
             success: function(response){

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

                           $("#shipping_address_city").append(option);
                      }
                 }

             }
         });
    });
});
</script>




@endsection
