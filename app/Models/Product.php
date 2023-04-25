<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function subcategories()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id', 'id');
    }

    public function subsubcategories()
    {
        return $this->belongsTo(SubCategory::class, 'subsubcategory_id', 'id');
    }
    public function images()
    {
        return $this->hasMany(MultiImg::class, 'product_id', 'id');
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'product_id', 'id');
    }

    public function admin()
    {
        return $this->hasMany(Admin::class, 'admins_id', 'id');
    }


}
