<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterCourierWeightCharge;
use App\Models\MasterCourier;

class MasterCourierWeightChargeController extends Controller
{
    public function pageTypeTable()
    {
        $table = MasterCourierWeightCharge::whereIn('status', [0, 1])->get();
        return view('admin.master-data.master_courier_weight_charges.index', ['table' => $table]);
    }


    public function pageTypeCreate()
    {
        $data = (Object) array();
        $data->courier = MasterCourier::where('status', 1)->get();

        return view('admin.master-data.master_courier_weight_charges.create', ['data' => $data]);
    }


    // Type create
    public function typeCreate(Request $request)
    {
        $model = new MasterCourierWeightCharge;
        $model->courier_id = $request->get('courier');
        $model->min_weight = $request->get('min_weight');
        $model->max_weight = $request->get('max_weight');
        $model->rate = $request->get('rate');
        $model->status = 1;
        $model->save();

        return redirect()->route('page.admin.master.courier_weight_charge.create')->with('success', 'Courier Weight Charge created successfully !!!');
    }


    public function pageTypeEdit($id)
    { 
        $data = (Object) array();
        $data->courier = MasterCourier::where('status', 1)->get();

        $courierWeightCharge = MasterCourierWeightCharge::find($id);
        return view('admin.master-data.master_courier_weight_charges.edit', ['data' => $data, 'courierWeightCharge' => $courierWeightCharge]);
    }

    // type update
    public function typeUpdate($id, Request $request)
    {
        $model = MasterCourierWeightCharge::where('id', $id)->update([
            'courier_id' => $request->get('courier'),
            'min_weight' => $request->get('min_weight'),
            'max_weight' => $request->get('max_weight'),
            'rate' => $request->get('rate')
        ]);

        return redirect()->back()->with('success', 'Courier Weight Charge updated successfully !!!');
    }


    // type Delete
    public function typeDelete($id)
    {

        $user = MasterCourierWeightCharge::where('id', $id)->update([
            'status' => 2
        ]);
        return redirect()->back()->with('success', 'Courier Weight Charge deleted successfully !!!');
    }

    // Status
    public function typeStatus($id, $status)
    {
        if ($status == 0) {
            $status = 1;
        } else {
            $status = 0;
        }
        $obj = MasterCourierWeightCharge::where('id', $id)->update([
            'status' => $status
        ]);
        return redirect()->back()->with('success', 'Courier Weight Charge status updated successfully !!!');
    }
}
