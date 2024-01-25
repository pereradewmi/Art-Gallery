<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{

    public function pageBanners (){
        $banners = Banner::where('status',[1])->get();
        return view('admin.banners.banners', ['banners'=>$banners]);
    }
    public function pageBannerCreate(Request $request){
        return view('admin.banners.create');
    }

    public function pageBannerEdit($id){
        $banners = Banner::where('status',1)->find($id);
        return view('admin.banners.edit', ['banners'=>$banners]);
    }

//create
    public function bannerCreate(Request $request){

        // dd($request->hasfile('avatar'));
        if ($request->hasfile('avatar')) {
             $file = $request->avatar;
             $name = 'ADMIN_'.Str::random(10). '.' . $file->getClientOriginalExtension();
            // $docFolder = public_path('img/admin');
            // $docFilePath = $docFolder . $name;
            $file->move(public_path('img/admin'), $name);

            $table = new Banner;
            $table->image_path = '/img/admin/'.$name;
            $table->status = 1;
            $table->save();

            return redirect()->route('page.admin.banners.create')->with('success', 'Banner is created');
        }

            return redirect()->route('page.admin.banners.create')->with('error', 'Banner is not created');
}

//update
public function bannerUpdate($id,Request $request){

      
    $banners = Banner::find($id);
  if ($request->hasfile('avatar')) {
        $file = $request->avatar;
        $name = 'Banner_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('img/admin'), $name);

        $banners->image_path = '/img/admin/' . $name;
        $banners->status = 1;
        $banners->save();
    }
        Banner::where('id', $id)->update([
            'image_path' => '/img/admin/'.$name

        ]);

        return redirect()->back()->with('success', 'Banner is updated');

}


//delete
public function bannerDelete($id){

    $banner = Banner::where('id', $id)->update([
        'status' => 2
    ]);
    return redirect()->back()->with('success', 'Banner is deleted');
}
}
