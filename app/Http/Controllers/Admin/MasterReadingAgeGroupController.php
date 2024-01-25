<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterReadingAgeGroup;
class MasterReadingAgeGroupController extends Controller
{
    public function pageTypeTable(){
        $table = MasterReadingAgeGroup::whereIn('status',[0,1])->get();
        return view('admin.master-data.master_reading_age_group.index', ['table'=>$table]);
    }
    public function pageTypeCreate(){
        return view('admin.master-data.master_reading_age_group.create');
    }

    public function pageTypeEdit($id){
        $type = MasterReadingAgeGroup::find($id);
        return view('admin.master-data.master_reading_age_group.edit', ['type'=>$type]);
    }

    // Type create
    public function typeCreate(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $model = new MasterReadingAgeGroup;
        $model->reading_age_group = $request->get('name');
        $model->status = 1;
        $model->save();

        return redirect()->route('page.admin.master.master_reading_age_group.create')->with('success', 'Age Group created successfully');
    }

    // type update
    public function typeUpdate($id,Request $request){

        $validatedData = $request->validate([
            'reading_age_group' => 'required|string|max:255',
        ]);

        $model = MasterReadingAgeGroup::where('id', $id)->update([
            'reading_age_group' => $request->get('reading_age_group')
        ]);

        return redirect()->back()->with('success', 'Age Group updated successfully');
    }

    // type Delete
    public function typeDelete($id){

        $user = MasterReadingAgeGroup::where('id', $id)->update([
            'status' => 2
        ]);
        return redirect()->back()->with('success', 'Age Group deleted successfully');
    }

   // Status
    public function typeStatus($id,$status){
        if ($status==0) {
            $status=1;
        }
        else{
            $status=0;
        }
        $obj = MasterReadingAgeGroup::where('id', $id)->update([
            'status' => $status
        ]);
        return redirect()->back()->with('success', 'Age Group status updated successfully');
    }
}
