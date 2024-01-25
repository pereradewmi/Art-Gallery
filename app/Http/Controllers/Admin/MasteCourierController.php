<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterCourier;

class MasteCourierController extends Controller
{
    public function pageTypeTable()
    {
        $table = MasterCourier::whereIn('status', [0, 1])->get();
        return view('admin.master-data.master_courier.index', ['table' => $table]);
    }

    public function pageTypeCreate()
    {
        return view('admin.master-data.master_courier.create');
    }

    public function pageTypeEdit($id)
    {
        $courier = MasterCourier::find($id);
        return view('admin.master-data.master_courier.edit', ['courier' => $courier]);
    }

    // Type create
    public function typeCreate(Request $request)
    {

        $model = new MasterCourier;
        $model->courier = $request->get('courier');
        $model->contact_no = $request->get('contact_no');
        $model->status = 1;
        $model->save();

        return redirect()->route('page.admin.master.master_courier.create')->with('success', 'Courier created successfully !!!');
    }

    // type update
    public function typeUpdate($id, Request $request)
    {
        $model = MasterCourier::where('id', $id)->update([
            'courier' => $request->get('courier'),
            'contact_no' => $request->get('contact_no')
        ]);

        return redirect()->back()->with('success', 'Courier updated successfully');
    }

    // type Delete
    public function typeDelete($id)
    {

        $user = MasterCourier::where('id', $id)->update([
            'status' => 2
        ]);
        return redirect()->back()->with('success', 'Courier deleted successfully');
    }

    // Status
    public function typeStatus($id, $status)
    {
        if ($status == 0) {
            $status = 1;
        } else {
            $status = 0;
        }
        $obj = MasterCourier::where('id', $id)->update([
            'status' => $status
        ]);
        return redirect()->back()->with('success', 'Courier status updated successfully');
    }
}
