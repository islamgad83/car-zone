<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipState extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function admin(){
        return $this->hasMany(Admin::class,'admins_id','id');
    }

    // public function district(){

    //     return $this->belongsTo(ShipDistrict::class,'ship_states', 'district_id', 'id');


    // }
    // public function division(){

    //     return $this->belongsTo(ShipDivision::class,'ship_states', 'division_id', 'id');


    // }
    public function division(){
        return $this->belongsTo(ShipDivision::class,'division_id','id');
    }

    public function district(){
        return $this->belongsTo(ShipDistrict::class,'district_id','id');
    }
}

