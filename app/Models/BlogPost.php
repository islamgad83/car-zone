<?php

namespace App\Models;

use App\Models\Blog\BlogPostCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getPostImageAttribute($x)
    {
        return url('/').'/'.$x;
    }


    public function category() {


        return $this->belongsTo(BlogPostCategory::class);
    }



}
