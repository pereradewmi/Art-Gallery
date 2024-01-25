<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(Request $request){
        $customers = Customer::whereIn('status',[0,1])->get();
        return view('admin.customers.index', ['customers'=>$customers]);
    }
    public function pageUserCreate(Request $request){
        return view('admin.users.create');
    }
    public function pageUserEdit($id){
        $user = User::find($id);
        return view('admin.users.edit', ['user'=>$user]);
    }
    public function pageProfile(Request $request){
        return view('admin.profile');
    }

    // user create
    public function userCreate(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);
        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->status = 1;
        $user->photo = '/assets/media/avatars/blank.png';
        $user->save();
        
        if ($request->hasfile('photo')) {
            $file = $request->photo;

            $name = 'ADMI_'.Str::random(10). $maxId . '.' . $file->getClientOriginalExtension();
            $docFolder = public_path('img/admin');
            $docFilePath = $docFolder . $name;
            $file->move(public_path('img/admin'), $name);

            User::where('id',$user->id)->update(['photo' => 'img/admin/'.$name]);
            
        }

        return redirect()->route('page.admin.users.create')->with('success', 'User is created');
    }

    // user Update
    public function userUpdate($id,Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user = User::where('id', $id)->update([
            'name' => $request->get('name')
        ]);

        return redirect()->back()->with('success', 'User is updated');
    }

    // user Delete
    public function userDelete($id){

        $user = User::where('id', $id)->update([
            'status' => 2
        ]);
        return redirect()->back()->with('success', 'User is deleted');
    }




}
