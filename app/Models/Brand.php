<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_name_en',
        'brand_name_ar',
        'brand_slug_en',
        'brand_slug_ar',
        'admins_id',
        'brand_image',

    ];


    public function admin(){
        return $this->hasMany(Admin::class,'admins_id','id');
    }

    public function brand(){
        return $this->belongsTo(Product::class,'brand_id','id');
    }
}
