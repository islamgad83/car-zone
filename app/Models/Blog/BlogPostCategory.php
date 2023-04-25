<?php

namespace App\Models\Blog;

use App\Models\Admin;
use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getPostImageAttribute($x)
    {
        return url('/').'/'.$x;
    }
    public function admin(){
        return $this->hasMany(Admin::class,'admins_id','id');
    }

    public function blogPosts(){
        return $this->hasMany(BlogPost::class,'category_id','id');
    }
}
