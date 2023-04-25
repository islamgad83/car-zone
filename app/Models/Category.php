<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable =   [
        'category_name_en',
        'category_name_ar' ,
        'category_slug_en' ,
        'category_slug_ar',
        'category_icon',
        'admins_id',
    ];
    public function admin(){
        return $this->hasMany(Admin::class,'admins_id','id');
    }
    public function category(){
        return $this->belongsTo(Product::class,'category_id','id');
    }

    public function subcategory(){
        return $this->hasMany(SubCategory::class,'category_id','id') ->with('subsubcategory');
    }

    public function getCategoryIconAttribute($x)
    {
        return url('/').'/'.$x;
    }

}
