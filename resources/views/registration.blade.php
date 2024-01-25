@extends('layouts.master')

@section('title')
Registration
@endsection

@section('content')

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a class="active" href="#">Registration</a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>Registration</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">

    <section class="section-padding no-top gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="form-grid">
                        <form action="{{ route('customer.register') }}" method="POST">
                            @csrf

                            <input class="form-control" type="hidden" name="customer_id" value="{{ $customerId }}">

                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="first_name" placeholder="Enter First Name"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="last_name" placeholder="Enter Last Name"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input placeholder="Enter Email" class="form-control" type="email" name="email"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input placeholder="Enter Password" class="form-control" type="password" id="password"
                                    name="password" required>
                                <span id="password-visibility" class="fa fa-fw fa-eye password-visibility-icon"></span>
                            </div>
                            <div class="form-group">
                                <label>Contact No (Personal)</label>
                                <select class="form-control" id="contact_no_personal_country_code"
                                    name="contact_no_personal_country_code" required>
                                    <option value="">- Select Country Code -</option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->country_code }}">{{ $country->country_code }} - {{
                                        $country->country_name }}</option>
                                    @endforeach
                                </select>
                                <input placeholder="Enter Contact Number (Personal)" class="form-control" type="text"
                                    id="personalContactNo" name="contact_no_personal" required>
                                {{-- <span id="personal-error-message" class="text-danger"></span> --}}
                            </div>

                            <div class="form-group">
                                <label>Contact No (Office)</label>
                                <select class="form-control" id="contact_no_office_country_code"
                                    name="contact_no_office_country_code">
                                    <option value="">- Select Country Code -</option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->country_code }}">{{ $country->country_code }} - {{
                                        $country->country_name }}</option>
                                    @endforeach
                                </select>
                                <input placeholder="Enter Contact Number (Office)" class="form-control" type="text"
                                    id="workingContactNo" name="contact_no_office">
                                {{-- <span id="working-error-message" class="text-danger"></span> --}}
                            </div>

                            <h4><b>Billing Information</b></h4>

                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control" id="billing_address_country" name="billing_address_country"
                                    required>
                                    <option value="">- Select Country -</option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Street Address Line 1 </label>
                                <input placeholder="Enter Street Address Line 1" class="form-control" type="text"
                                    name="billing_address_street_address_line_1" id="billing_address_street_address_line_1" required>
                            </div>

                            <div class="form-group">
                                <label>Street Address Line 2 </label>
                                <input placeholder="Enter Street Address Line 2" class="form-control" type="text"
                                    name="billing_address_street_address_line_2" id="billing_address_street_address_line_2" required>
                            </div>

                            <div class="form-group">
                                <label>City</label>
                                <select class="form-control" id="billing_address_city" name="billing_address_city" id="billing_address_city"
                                    required>
                                    <option value="">- Select City -</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>State</label>
                                <input placeholder="Enter State" class="form-control" type="text"
                                    name="billing_address_state" id="billing_address_state" required>
                            </div>

                            <div class="form-group">
                                <label>Zip Code</label>
                                <input placeholder="Enter Zip Code" class="form-control" type="text"
                                    name="billing_address_zip_code" id="billing_address_zip_code" required>
                            </div>

                            <h4><b>Shipping Information</b></h4>
                            <input type="checkbox" id="sameInput" name="sameInput" value="sameInput">
                            <label for="sameInput">Same as Billing Information</label>


                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control" id="shipping_address_country"
                                    name="shipping_address_country" required>
                                    <option value="">- Select Country -</option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Street Address Line 1 </label>
                                <input placeholder="Enter Street Address Line 1" class="form-control" type="text"
                                    name="shipping_address_street_address_line_1" id="shipping_address_street_address_line_1" required>
                            </div>

                            <div class="form-group">
                                <label>Street Address Line 2 </label>
                                <input placeholder="Enter Street Address Line 2" class="form-control" type="text"
                                    name="shipping_address_street_address_line_2" id="shipping_address_street_address_line_2" required>
                            </div>

                            <div class="form-group">
                                <label>City</label>
                                <select class="form-control"  name="shipping_address_city" id="shipping_address_city"
                                    required>
                                    <option value="">- Select City -</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>State</label>
                                <input placeholder="Enter State" class="form-control" type="text"
                                    name="shipping_address_state" id="shipping_address_state" required>
                            </div>

                            <div class="form-group">
                                <label>Zip Code</label>
                                <input placeholder="Enter Zip Code" class="form-control" type="text"
                                    name="shipping_address_zip_code" id="shipping_address_zip_code" required>
                            </div>




                            {{-- <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-7">
                                        <div class="skin-minimal">
                                            <ul class="list">
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">i agree <a href="#">Terms of
                                                            Services</a></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-5 text-right">
                                        <p class="help-block"><a data-target="#myModal" data-toggle="modal">Forgot
                                                password?</a>
                                        </p>
                                    </div>
                                </div>
                            </div> --}}

                            <button class="btn btn-theme btn-lg btn-block">Register</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<script>

    let billingToShippng = false;
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

       $("#sameInput").change(function() {
            if($(this).prop('checked')) {
                billingToShippng = true;
                // console.log('asda');
                // $("#shipping_address_country").val($("#billing_address_country").val());
                // $("#shipping_address_country").empty();
                // $("#billing_address_country option").clone().appendTo("#shipping_address_country");
                $("#shipping_address_country").val($("#billing_address_country").val()).trigger("change");


                $("#shipping_address_street_address_line_1").val($("#billing_address_street_address_line_1").val());
                $("#shipping_address_street_address_line_2").val($("#billing_address_street_address_line_2").val());

                $("#shipping_address_state").val($("#billing_address_state").val());
                $("#shipping_address_zip_code").val($("#billing_address_zip_code").val());
            } else {
                billingToShippng = false;
                $("#shipping_address_country").val(null).trigger("change");
                $("#shipping_address_city").val(null).trigger("change");

                $("#shipping_address_street_address_line_1").val('');
                $("#shipping_address_street_address_line_2y").val('');

                $("#shipping_address_state").val('');
                $("#shipping_address_zip_code").val('');
            }
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

                 if(billingToShippng){
                     $("#shipping_address_city").val($("#billing_address_city").val()).trigger("change");
                 }



             }
         });
    });
});
</script>

@endsection
