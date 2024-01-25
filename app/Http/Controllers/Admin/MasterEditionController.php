<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterEdition;

class MasterEditionController extends Controller
{
    public function pageTypeTable()
    {
        $table = MasterEdition::whereIn('status', [0, 1])->get();
        return view('admin.master-data.master_edition.index', ['table' => $table]);
    }
    public function pageTypeCreate()
    {
        return view('admin.master-data.master_edition.create');
    }

    public function pageTypeEdit($id)
    {
        $type = MasterEdition::find($id);
        return view('admin.master-data.master_edition.edit', ['type' => $type]);
    }

    // Type create
    public function typeCreate(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $model = new MasterEdition;
        $model->edition = $request->get('name');
        $model->status = 1;
        $model->save();

        return redirect()->route('page.admin.master.master_edition.create')->with('success', 'Edition created successfully');
    }

    // type update
    public function typeUpdate($id, Request $request)
    {

        $validatedData = $request->validate([
            'edition' => 'required|string|max:255',
        ]);

        $model = MasterEdition::where('id', $id)->update([
            'edition' => $request->get('edition')
        ]);

        return redirect()->back()->with('success', 'Edition updated successfully');
    }

    // type Delete
    public function typeDelete($id)
    {

        $user = MasterEdition::where('id', $id)->update([
            'status' => 2
        ]);
        return redirect()->back()->with('success', 'Edition deleted successfully');
    }

    // Status
    public function typeStatus($id, $status)
    {
        if ($status==0) {
            $status=1;
        } else {
            $status=0;
        }
        $obj = MasterEdition::where('id', $id)->update([
            'status' => $status
        ]);
        return redirect()->back()->with('success', 'Edition status updated successfully');
    }
}
