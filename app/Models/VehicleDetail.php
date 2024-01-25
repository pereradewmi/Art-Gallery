<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleDetail extends Model
{
    protected $fillable = [
        'id',
        'start_date',
        'close_date',
        'purchase_date',
        'data_source_id',
        'office_id',
        'stock_number',
        'status',
        'stock_location_id',
        'yard_location_id',
        'yard_datetransport_company_id',
        'customer_id',
        'auction_setting',
        'auction_charges',
        'auction_name',
        'bid_number',
        'country',
        'ramadbk',
        'jct',
        'tcv',
        'jays_lk',
        'title',
        'vehicle_type',
        'body_type',
        'make',
        'model',
        'grade',
        'transmission',
        'fuel',
        'exterior_color',
        'interior_color',
        'chassis_no',
        'drive',
        'mileage',
        'auction_grade',
        'manufacture_year',
        'exterior_grade',
        'interior_grade',
        'seating_capacity',
        'twd_fwd',
        'doors',
        'model_code',
        'supplier_path',
        'length',
        'purchased_by',
        'width',
        'requested_by',
        'height',
        'requested_reason',
        'weight',
        'video_for',
        'm3',
        'youtube_video_url',
        'engine_type',
        'engine_capacity',
        'turbo',
        'selling_area',
        'good_points',
        'mechanical_faults',
        'model_code_description',
        'engine_note',
        'other_option',
        'remark',
    ];

    public function vehicleImages()
    {
        return $this->hasMany(VehicleImage::class, 'vehicle_detail_id', 'id');
    }

    public function vehicleOptions()
    {
        return $this->hasMany(VehicleOption::class, 'vehicle_detail_id', 'id');
    }

 
    
    
    
    
    public function vehicleFuel()
    {
        return $this->belongsTo('App\Models\MasterFuel', 'fuel', 'id');
    }


    public function vehicleImage()
    {
        return $this->hasMany('App\Models\VehicleImage', 'vehicle_detail_id', 'id');
    }



    public function vehicleTransmission()
    {
        return $this->belongsTo('App\Models\MasterTransmission', 'transmission', 'id');
    }


    public function vehicleModell()
    {
        return $this->belongsTo('App\Models\Modell', 'model', 'id');
    }

    public function vehicleMake()
    {
        return $this->belongsTo('App\Models\Make', 'make', 'id');
    }

    public function exteriorColor()
    {
        return $this->belongsTo('App\Models\MasterExteriorColor', 'exterior_color', 'id');
    }

    public function vehicleType()
    {
        return $this->belongsTo('App\Models\MasterType', 'type', 'id');
    }


    public function vehicleOption()
    {
        return $this->hasMany('App\Models\VehicleOption', 'vehicle_detail_id', 'id');
    }



}
