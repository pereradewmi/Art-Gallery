<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterCategory;
class MasterCategoryController extends Controller
{
    public function pageTypeTable(){
        $table = MasterCategory::whereIn('status',[0,1])->get();
        return view('admin.master-data.master_category.index', ['table'=>$table]);
    }
    public function pageTypeCreate(){
        return view('admin.master-data.master_category.create');
    }

    public function pageTypeEdit($id){
        $type = MasterCategory::find($id);
        return view('admin.master-data.master_category.edit', ['type'=>$type]);
    }

    // Type create
    public function typeCreate(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $model = new MasterCategory;
        $model->category_name = $request->get('name');
        $model->status = 1;
        $model->save();

        return redirect()->route('page.admin.master.master_category.create')->with('success', 'Category created successfully');
    }

    // type update
    public function typeUpdate($id,Request $request){

        $validatedData = $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        $model = MasterCategory::where('id', $id)->update([
            'category_name' => $request->get('category_name')
        ]);

        return redirect()->back()->with('success', 'Category updated successfully');
    }

    // type Delete
    public function typeDelete($id){

        $user = MasterCategory::where('id', $id)->update([
            'status' => 2
        ]);
        return redirect()->back()->with('success', 'Category deleted successfully');
    }

   // Status
    public function typeStatus($id,$status){
        if ($status==0) {
            $status=1;
        }
        else{
            $status=0;
        }
        $obj = MasterCategory::where('id', $id)->update([
            'status' => $status
        ]);
        return redirect()->back()->with('success', 'Category status updated successfully');
    }
}
