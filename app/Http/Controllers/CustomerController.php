<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\Customer;
use App\Models\Country;
use App\Models\City;


class CustomerController extends Controller
{

    public function registration()
    {
        $maxId = Customer::max('id');
        $customerId = 'CUST' . str_pad(($maxId + 1), 6, "0", STR_PAD_LEFT);
        $countries = Country::where('status', 1)->get();

        return view('registration', [
            'customerId' => $customerId,
            'countries' => $countries
        ]);
    }


    public function getCities($countryId=0){
        $empData['data'] = City::orderby("city_name","asc")
             ->select('id','country_id','city_name')
             ->where('country_id',$countryId)
             ->get();

        return response()->json($empData);
   }


    public function register(Request $request)
        {
            // Check if the email already exists
        $existingCustomer = Customer::where('email', $request->email)->first();

        if ($existingCustomer) {
            // Email already registered, display an error message
            return redirect()->back()->with('error', 'You are already registered. Please use the login option.');
        }
        $customer = new Customer();
        $customer->customer_id = $request->customer_id;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);

        $customer->contact_no_personal_country_code = $request->contact_no_personal_country_code;
        $customer->contact_no_personal = $request->contact_no_personal;
        $customer->contact_no_office_country_code = $request->contact_no_office_country_code;
        $customer->contact_no_office = $request->contact_no_office;

        $customer->billing_address_country_id = $request->billing_address_country;
        $customer->billing_address_street_address_line_1 = $request->billing_address_street_address_line_1;
        $customer->billing_address_street_address_line_2 = $request->billing_address_street_address_line_2;
        $customer->billing_address_city_id = $request->billing_address_city;
        $customer->billing_address_state = $request->billing_address_state;
        $customer->billing_address_zip_code = $request->billing_address_zip_code;

        $customer->shipping_address_country_id = $request->shipping_address_country;
        $customer->shipping_address_street_address_line_1 = $request->shipping_address_street_address_line_1;
        $customer->shipping_address_street_address_line_2 = $request->shipping_address_street_address_line_2;
        $customer->shipping_address_city_id = $request->shipping_address_city;
        $customer->shipping_address_state = $request->shipping_address_state;
        $customer->shipping_address_zip_code = $request->shipping_address_zip_code;

        $customer->save();

        return redirect()->route('customer.login')->with('success', 'Registration Successful !!!');
    }


    public function login()
    {
        return view('login');
    }


    public function log_in(Request $request)
    {
        if (Auth::guard('customers')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/customer/profile')->with('success', 'Login Successful !!!');
        }

        return redirect('/customer/login')->with('error', 'Invalid Credentials !!!');

    }


    public function logOut(Request $request)
    {
        Auth::guard('customers')->logout();

        return redirect('/customer/login')->with('success', 'Logging out successful !!!');
    }


    public function profile()
    {
        if (Auth::guard('customers')->check()){
            $customer = Customer::find(auth()->guard('customers')->user()->id);
            $countries = Country::where('status', 1)->get();
            $cities = City::where('status', 1)->get();
            return view('profile', [
                'customer' => $customer,
                'countries' => $countries,
                'cities' => $cities,
            ]);
        }
        else {
            return view('login');
        }
    }

    public function update(Request $request)
    {
        $customer = Customer::find($request->customer_id);
        $customer->first_name = $request->get('first_name');
        $customer->last_name = $request->get('last_name');
        $customer->email = $request->get('email');
        if ($request->password != null) {
            $customer->password = Hash::make($request->password);
        }

        $customer->contact_no_personal_country_code = $request->contact_no_personal_country_code;
        $customer->contact_no_personal = $request->contact_no_personal;
        $customer->contact_no_office_country_code = $request->contact_no_office_country_code;
        $customer->contact_no_office = $request->contact_no_office;

        $customer->billing_address_country_id = $request->billing_address_country;
        $customer->billing_address_street_address_line_1 = $request->billing_address_street_address_line_1;
        $customer->billing_address_street_address_line_2 = $request->billing_address_street_address_line_2;
        $customer->billing_address_city_id = $request->billing_address_city;
        $customer->billing_address_state = $request->billing_address_state;
        $customer->billing_address_zip_code = $request->billing_address_zip_code;

        $customer->shipping_address_country_id = $request->shipping_address_country;
        $customer->shipping_address_street_address_line_1 = $request->shipping_address_street_address_line_1;
        $customer->shipping_address_street_address_line_2 = $request->shipping_address_street_address_line_2;
        $customer->shipping_address_city_id = $request->shipping_address_city;
        $customer->shipping_address_state = $request->shipping_address_state;
        $customer->shipping_address_zip_code = $request->shipping_address_zip_code;

        $customer->update();

        return redirect('/')->with('success', 'Profile Updated Successfully !!!');
    }



    public function orders()
    {
        return view('orders');
    }

}
