<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterCourierCityCharge;
use App\Models\MasterCourier;
use App\Models\Country;
use App\Models\City;

class MasterCourierCityChargeController extends Controller
{
    public function pageTypeTable()
    {
        $table = MasterCourierCityCharge::whereIn('status', [0, 1])->get();
        return view('admin.master-data.master_courier_city_charges.index', ['table' => $table]);
    }


    public function pageTypeCreate()
    {
        $data = (Object) array();
        $data->courier = MasterCourier::where('status', 1)->get();
        $data->country = Country::where('status', 1)->get();

        return view('admin.master-data.master_courier_city_charges.create', ['data' => $data]);
    }


    public function getCities($countryId=0){
        $empData['data'] = City::orderby("city_name","asc")
             ->select('id','country_id','city_name')
             ->where('country_id',$countryId)
             ->get();

        return response()->json($empData);
   }


    // Type create
    public function typeCreate(Request $request)
    {
        $model = new MasterCourierCityCharge;
        $model->courier_id = $request->get('courier');
        $model->country_id = $request->get('country');
        $model->city_id = $request->get('city');
        $model->delivery_fee = $request->get('delivery_fee');
        $model->status = 1;
        $model->save();

        return redirect()->route('page.admin.master.courier_city_charge.create')->with('success', 'Courier City Charge created successfully !!!');
    }


    public function pageTypeEdit($id)
    { 
        $data = (Object) array();
        $data->courier = MasterCourier::where('status', 1)->get();
        $data->country = Country::where('status', 1)->get();
        $data->city = City::where('status', 1)->get();


        $courierCityCharge = MasterCourierCityCharge::find($id);
        return view('admin.master-data.master_courier_city_charges.edit', ['data' => $data, 'courierCityCharge' => $courierCityCharge]);
    }

    // type update
    public function typeUpdate($id, Request $request)
    {
        $model = MasterCourierCityCharge::where('id', $id)->update([
            'delivery_fee' => $request->get('delivery_fee')
        ]);

        return redirect()->back()->with('success', 'Courier City Charge updated successfully !!!');
    }


    // type Delete
    public function typeDelete($id)
    {

        $user = MasterCourierCityCharge::where('id', $id)->update([
            'status' => 2
        ]);
        return redirect()->back()->with('success', 'Courier City Charge deleted successfully !!!');
    }

    // Status
    public function typeStatus($id, $status)
    {
        if ($status == 0) {
            $status = 1;
        } else {
            $status = 0;
        }
        $obj = MasterCourierCityCharge::where('id', $id)->update([
            'status' => $status
        ]);
        return redirect()->back()->with('success', 'Courier City Charge status updated successfully !!!');
    }
}
