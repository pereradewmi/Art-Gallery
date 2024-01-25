<?php

namespace App\Http\Controllers;

use App\Models\MasterMake;
use App\Models\VehicleDetail;
use App\Models\VehicleOption;
use App\Models\MasterType;
use Illuminate\Http\Request;
use App\Models\Accessory;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    public function index()
    {
        // $makes = Make::whereIn('id', [44, 61, 49, 56, 54, 37, 89, 124, 68, 67, 8, 76, 13, 110, 29, 80, 112, 52, 85, 47, 120, 74, 123, 35])->orderByRaw('FIELD(id,120,47,85,52,112,80,29,110,13,76,8,67,68,124,89,37,54,56,49,61,44,74,123,35)')->get();
        // $types = VehicleType::whereIn('id', [10, 6, 12, 9, 13, 3, 14, 19, 16, 15, 5, 20])->orderByRaw('FIELD(id,10,6,12,9,13,3,14,19,16,15,5,20)')->get();

        // $allmakes = Make::whereIn('id', [120, 47, 112, 85, 74, 80, 52, 29, 123, 110, 13, 76, 8, 68, 124, 67, 54, 61, 49, 35, 37, 89])->orderByRaw('FIELD(id,120,47,112,85,74,80,52,29,123,110,13,76,8,68,124,67,54,61,49,35,37,89)')->get();
        // $othermakes = Make::whereNotIn('id', [120, 47, 112, 85, 74, 80, 52, 29, 123, 110, 13, 76, 8, 68, 124, 67, 54, 61, 49, 35, 37, 89])
        //     ->orderBy('make', 'asc')
        //     ->get();
        // $alltypes = VehicleType::where('status', 1)->get();
        // $models = Modell::where('status', 1)->get();
        // $excolor = ExteriorColor::where('status', 1)->get();
        // $incolor = InteriorColor::where('status', 1)->get();
        // $transmission = Transmission::where('status', 1)->get();
        // $enginetype = EngineType::get();
        // $countries = Country::where('status', 1)->where('isStockcountry', 1)->get();
        // $yards = Yard::where('status', 1)->get();
        // $fuels = Fuel::where('status', 1)->get();
        $vehicles = VehicleDetail::whereIn('status', [0, 1])->with('vehicleFuel')->get();
        // $accessories = Accessory::where('status', 1)->get();
        return view(
            'vehicles',
            [
                // 'makes' => $makes,
                // 'types' => $types,
                // 'models' => $models,
                // 'allmakes' => $allmakes,
                // 'alltypes' => $alltypes,
                // 'excolors' => $excolor,
                // 'incolors' => $incolor,
                // 'transmissions' => $transmission,
                // 'enginetypes' => $enginetype,
                // 'countries' => $countries,
                // 'fuels' => $fuels,
                // 'yards' => $yards,
                'vehicles' => $vehicles,
                // 'accessories' => $accessories,
                // 'othermakes' => $othermakes
            ]
        );
    }



    public function vehicleSpecification($id)
    {
        $makes = MasterMake::whereIn('id', [44, 61, 49, 56, 54, 37, 89, 124, 68, 67, 8, 76, 13, 110, 29, 80, 112, 52, 85, 47, 120, 74, 123, 35])->orderByRaw('FIELD(id,120,47,85,52,112,80,29,110,13,76,8,67,68,124,89,37,54,56,49,61,44,74,123,35)')->get();
        $types = MasterType::whereIn('id', [10, 6, 12, 9, 13, 3, 14, 19, 16, 15, 5, 20])->orderByRaw('FIELD(id,10,6,12,9,13,3,14,19,16,15,5,20)')->get();

        $vehicleacce = DB::table('master_options')
            ->where('vehicle_options.vehicle_detail_id', $id)
            ->join('vehicle_options', 'master_options.id', '=', 'vehicle_options.option_id')
            ->select('master_options.name')->get();

        $vehicle = VehicleDetail::with('vehicleImage')->with('vehicleTransmission')->with('exteriorColor')->with('vehicleType')->with('vehicleFuel')->where('id', $id)->get();



        return view('vehicle-specification', ['vehicle' => $vehicle, 'makes' => $makes, 'types' => $types, 'vehicleacce' => $vehicleacce]);
    }


}