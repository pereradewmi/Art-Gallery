<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterAuthor;

class MasterAuthorController extends Controller
{
    public function pageTypeTable(){
        $table = MasterAuthor::whereIn('status',[0,1])->get();
        return view('admin.master-data.master_author.index', ['table'=>$table]);
    }
    public function pageTypeCreate(){
        return view('admin.master-data.master_author.create');
    }

    public function pageTypeEdit($id){
        $type = MasterAuthor::find($id);
        return view('admin.master-data.master_author.edit', ['type'=>$type]);
    }

    // Type create
    public function typeCreate(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $model = new MasterAuthor;
        $model->author_name = $request->get('name');
        $model->status = 1;
        $model->save();

        return redirect()->route('page.admin.master.master_author.create')->with('success', 'Author created successfully');
    }

    // type update
    public function typeUpdate($id,Request $request){

        $validatedData = $request->validate([
            'author_name' => 'required|string|max:255',
        ]);

        $model = MasterAuthor::where('id', $id)->update([
            'author_name' => $request->get('author_name')
        ]);

        return redirect()->back()->with('success', 'Author updated successfully');
    }

    // type Delete
    public function typeDelete($id){

        $user = MasterAuthor::where('id', $id)->update([
            'status' => 2
        ]);
        return redirect()->back()->with('success', 'Author deleted successfully');
    }

   // Status
    public function typeStatus($id,$status){
        if ($status==0) {
            $status=1;
        }
        else{
            $status=0;
        }
        $obj = MasterAuthor::where('id', $id)->update([
            'status' => $status
        ]);
        return redirect()->back()->with('success', 'Author status updated successfully');
    }
}
