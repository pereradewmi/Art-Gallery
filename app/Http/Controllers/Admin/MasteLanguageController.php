<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterLanguage;

class MasteLanguageController extends Controller
{
    public function pageTypeTable()
    {
        $table = MasterLanguage::whereIn('status', [0, 1])->get();
        return view('admin.master-data.master_language.index', ['table' => $table]);
    }
    public function pageTypeCreate()
    {
        return view('admin.master-data.master_language.create');
    }

    public function pageTypeEdit($id)
    {
        $type = MasterLanguage::find($id);
        return view('admin.master-data.master_language.edit', ['type' => $type]);
    }

    // Type create
    public function typeCreate(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $model = new MasterLanguage;
        $model->language = $request->get('name');
        $model->status = 1;
        $model->save();

        return redirect()->route('page.admin.master.master_language.create')->with('success', 'Language created successfully');
    }

    // type update
    public function typeUpdate($id, Request $request)
    {

        $validatedData = $request->validate([
            'language' => 'required|string|max:255',
        ]);

        $model = MasterLanguage::where('id', $id)->update([
            'language' => $request->get('language')
        ]);

        return redirect()->back()->with('success', 'Language updated successfully');
    }

    // type Delete
    public function typeDelete($id)
    {

        $user = MasterLanguage::where('id', $id)->update([
            'status' => 2
        ]);
        return redirect()->back()->with('success', 'Language deleted successfully');
    }

    // Status
    public function typeStatus($id, $status)
    {
        if ($status == 0) {
            $status = 1;
        } else {
            $status = 0;
        }
        $obj = MasterLanguage::where('id', $id)->update([
            'status' => $status
        ]);
        return redirect()->back()->with('success', 'Language status updated successfully');
    }
}
