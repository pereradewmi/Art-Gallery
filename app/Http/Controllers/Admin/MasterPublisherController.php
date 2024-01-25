<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterPublisher;

class MasterPublisherController extends Controller
{
    public function pageTypeTable(){
        $table = MasterPublisher::whereIn('status',[0,1])->get();
        return view('admin.master-data.master_publisher.index', ['table'=>$table]);
    }
    public function pageTypeCreate(){
        return view('admin.master-data.master_publisher.create');
    }

    public function pageTypeEdit($id){
        $type = MasterPublisher::find($id);
        return view('admin.master-data.master_publisher.edit', ['type'=>$type]);
    }

    // Type create
    public function typeCreate(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $model = new MasterPublisher;
        $model->publisher_name = $request->get('name');
        $model->status = 1;
        $model->save();

        return redirect()->route('page.admin.master.master_publisher.create')->with('success', 'Publisher created successfully');
    }

    // type update
    public function typeUpdate($id,Request $request){

        $validatedData = $request->validate([
            'publisher_name' => 'required|string|max:255',
        ]);

        $model = MasterPublisher::where('id', $id)->update([
            'publisher_name' => $request->get('publisher_name')
        ]);

        return redirect()->back()->with('success', 'Publisher updated successfully');
    }

    // type Delete
    public function typeDelete($id){

        $user = MasterPublisher::where('id', $id)->update([
            'status' => 2
        ]);
        return redirect()->back()->with('success', 'Publisher deleted successfully');
    }

   // Status
    public function typeStatus($id,$status){
        if ($status==0) {
            $status=1;
        }
        else{
            $status=0;
        }
        $obj = MasterPublisher::where('id', $id)->update([
            'status' => $status
        ]);
        return redirect()->back()->with('success', 'Publisher status updated successfully');
    }
}
