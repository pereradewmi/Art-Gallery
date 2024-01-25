<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\VehicleDetail;
use App\Models\MasterType;
use App\Models\MasterBodyType;
use App\Models\MasterOption;
use App\Models\MasterExteriorColor;
use App\Models\MasterMake;
use App\Models\MasterTransmission;
use App\Models\MasterFuel;
use App\Models\VehicleImage;
use App\Models\VehicleOption;
use App\Models\MasterModel;



class VehicleController extends Controller
{


    public function pageVehicleTable(){
        $table = VehicleDetail::whereIn('status',[0,1])->get();
        return view('admin.vehicle.index', ['table'=>$table]);
    }
    public function pageCreate(){
        $data = (Object)array();
        $data->stock_no = 'JP-'.((VehicleDetail::orderBy('created_at', 'desc')->first()->id ?? 0 ) + 1);
        $data->type = MasterType::where('status',1)->get();
        $data->body_type = MasterBodyType::where('status',1)->get();
        $data->exterior_color = MasterExteriorColor::where('status',1)->get();
        $data->transmission = MasterTransmission::where('status',1)->get();
        $data->fuel = MasterFuel::where('status',1)->get();
        $data->make = MasterMake::where('status',1)->get();
        $data->model = MasterModel::where('status',1)->get();

        $data->accessories = MasterOption::where('status',1)->get();


        return view('admin.vehicle.create', ['data'=>$data]);
    }

    public function pageVehicleEdit($id){
        $vehicle = VehicleDetail::with('vehicleImages','vehicleOptions')->find($id);
        $data = (Object)array();
        $data->type = MasterType::where('status',1)->get();
        $data->body_type = MasterBodyType::where('status',1)->get();
        $data->exterior_color = MasterExteriorColor::where('status',1)->get();
        $data->transmission = MasterTransmission::where('status',1)->get();
        $data->fuel = MasterFuel::where('status',1)->get();
        $data->make = MasterMake::where('status',1)->get();
        $data->model = MasterModel::where('status',1)->get();

        $data->accessories = MasterOption::where('status',1)->get();


        return view('admin.vehicle.edit', ['data'=>$data, 'vehicle'=>$vehicle]);
    }


    // vehicle create
    public function vehicleCreate(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'body_type' => 'required|string|max:255',
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'fuel' => 'required|string|max:255',
            'exterior_color' => 'required|string|max:255',
            'chassis_no' => 'required|string|max:255',
            'drive' => 'required|string|max:255',
            'mileage' => 'required|string|max:255',
            'manufacture_year' => 'required|string|max:255',
            'seating_capacity' => 'required|string|max:255',
            'twd_fwd' => 'required|string|max:255',
            'doors' => 'required|string|max:255',
            'length' => 'required|string|max:255',
            'width' => 'required|string|max:255',
            'height' => 'required|string|max:255',
            'weight' => 'required|string|max:255',
            'engine_capacity' => 'required|string|max:255',
            'transmission' => 'required|string|max:255',
            //'remark' => 'required|string|max:255',
            'fob_price' => 'required|string|max:255',
            //'main_image_path' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);


        $model = new VehicleDetail;
        $model->stock_no = $request->get('stock_no');
        $model->title = $request->get('title');
        $model->type = $request->get('type');
        $model->body_type = $request->get('body_type');
        $model->make = $request->get('make');
        $model->model = $request->get('model');
        $model->fuel = $request->get('fuel');
        $model->exterior_color = $request->get('exterior_color');
        $model->chassis_no = $request->get('chassis_no');
        $model->drive = $request->get('drive');
        $model->mileage = $request->get('mileage');
        $model->manufacture_year = $request->get('manufacture_year');
        $model->seating_capacity = $request->get('seating_capacity');
        $model->twd_fwd = $request->get('twd_fwd');
        $model->doors = $request->get('doors');
        $model->length = $request->get('length');
        $model->width = $request->get('width');
        $model->height = $request->get('height');
        $model->weight = $request->get('weight');
        $model->engine_capacity = $request->get('engine_capacity');
        $model->transmission = $request->get('transmission');
        $model->remark = $request->get('remark');
        $model->fob_price = $request->get('fob_price');
        $model->status = $request->get('status');

        $model->save();

        for ($i=1;$i<7;$i++){
            if ($request->hasFile('main_image_'.$i)) {

                $file = $request->file('main_image_'.$i);
                //dd($file);
                $name = 'vehicle_image_main_' .$model->id .'_'.$i.'.'.$file->getClientOriginalExtension();
                $docFolder = public_path('img/vehicles');
                $docFilePath = $docFolder . $name;
                $file->move(public_path('img/vehicles'), $name);

                if ($i==1) {
                    VehicleDetail::where('id',$model->id)->update(["main_image_path"=>'/img/vehicles/'.$name]);
                }

                $pic = new VehicleImage;
                $pic->vehicle_detail_id = $model->id;
                $pic->image_path = '/img/vehicles/'.$name;
                $pic->save();


            }

        }


        if ($request->option) {
            foreach ($request->option as $key => $option) {
                $vehicleOption = new VehicleOption();
                $vehicleOption->option_id = $option;
                $vehicleOption->vehicle_detail_id = $model->id;
                $vehicleOption->save();
            }
        }


        return redirect()->route('page.admin.vehicle.create')->with('success', 'Vehicle created successfully');
    }


    // vehicle update
    public function vehicleUpdate(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'body_type' => 'required|string|max:255',
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'fuel' => 'required|string|max:255',
            'exterior_color' => 'required|string|max:255',
            'chassis_no' => 'required|string|max:255',
            'drive' => 'required|string|max:255',
            'mileage' => 'required|string|max:255',
            'manufacture_year' => 'required|string|max:255',
            'seating_capacity' => 'required|string|max:255',
            'twd_fwd' => 'required|string|max:255',
            'doors' => 'required|string|max:255',
            'length' => 'required|string|max:255',
            'width' => 'required|string|max:255',
            'height' => 'required|string|max:255',
            'weight' => 'required|string|max:255',
            'engine_capacity' => 'required|string|max:255',
            'transmission' => 'required|string|max:255',
            'remark' => 'required|string|max:1000',
            'fob_price' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        $model = VehicleDetail::where('id', $request->get('id'))->update(
            [
                'title' => $request->get('title'),
                'type' => $request->get('type'),
                'body_type' => $request->get('body_type'),
                'make' => $request->get('make'),
                'model' => $request->get('model'),
                'fuel' => $request->get('fuel'),
                'exterior_color' => $request->get('exterior_color'),
                'chassis_no' => $request->get('chassis_no'),
                'drive' => $request->get('drive'),
                'mileage' => $request->get('mileage'),
                'manufacture_year' => $request->get('manufacture_year'),
                'seating_capacity' => $request->get('seating_capacity'),
                'twd_fwd' => $request->get('twd_fwd'),
                'doors' => $request->get('doors'),
                'length' => $request->get('length'),
                'width' => $request->get('width'),
                'height' => $request->get('height'),
                'weight' => $request->get('weight'),
                'engine_capacity' => $request->get('engine_capacity'),
                'transmission' => $request->get('transmission'),
                'remark' => $request->get('remark'),
                'fob_price' => $request->get('fob_price'),
                'status' => $request->get('status'),
            ]
        );
        
        //VehicleImage::where('vehicle_detail_id',$request->get('id'))->delete();
        
        for ($i=1;$i<7;$i++){
            if ($request->hasFile('main_image_'.$i) ) {

                $file = $request->file('main_image_'.$i);
                $name = 'vehicle_image_main_' .Str::random(15).$request->get('id').'_'.$i.'.'.$file->getClientOriginalExtension();
                $nameWithOutExt = 'vehicle_image_main_' .$request->get('id').'_'.$i;
                $docFolder = public_path('img/vehicles');
                $docFilePath = $docFolder . $name;
                $file->move(public_path('img/vehicles'), $name);

                // if ($i==1) {
                //     VehicleDetail::where('id',$request->get('id'))->update(["main_image_path"=>'/img/vehicles/'.$name]);
                // }
                // if(VehicleImage::where('image_path','like', "%{$nameWithOutExt}%")->first()){
                //     VehicleImage::where('image_path','like', "%{$nameWithOutExt}%")->update([
                //         'image_path'=>'/img/vehicles/'.$name
                //     ]);
                // }
                // else{
                //     $pic = new VehicleImage;
                //     $pic->vehicle_detail_id = $request->get('id');
                //     $pic->image_path = '/img/vehicles/'.$name;
                //     $pic->save();
                // }
                
                //VehicleImage::where('image_path',$request->get('main_image_url_'.$i))->delete();

                if ($i==1) {
                    VehicleDetail::where('id',$request->get('id'))->update(["main_image_path"=>'/img/vehicles/'.$name]);
                }

                if($request->get('main_image_url_'.$i)==''){
                
                    $pic = new VehicleImage;
                    $pic->vehicle_detail_id = $request->get('id');
                    $pic->image_path = '/img/vehicles/'.$name;
                    $pic->save();
                }
                else{
                    VehicleImage::where('image_path',$request->get('main_image_url_'.$i))->update([
                        'image_path' => '/img/vehicles/'.$name
                    ]);
                }
            }

        }

        if ($request->option) {
            VehicleOption::where('vehicle_detail_id',$request->get('id'))->delete();
            foreach ($request->option as $key => $option) {
                $vehicleOption = new VehicleOption();
                $vehicleOption->option_id = $option;
                $vehicleOption->vehicle_detail_id = $request->get('id');
                $vehicleOption->save();
            }
        }

        return redirect()->back()->with('success', 'Vehicle updated successfully');
    }

    // vehicle Delete
    public function vehicleDelete($id){

        $obj = VehicleDetail::where('id', $id)->update([
            'status' => 2
        ]);

        return redirect()->back()->with('success', 'Vehicle deleted successfully');
    }

    // vehicle Status
    public function vehicleStatus($id,$status){
        if ($status==0) {
            $status=1;
        }
        else{
            $status=0;
        }

        $obj = VehicleDetail::where('id', $id)->update([
            'status' => $status
        ]);

        return redirect()->back()->with('success', 'Vehicle status updated successfully');
    }


}
