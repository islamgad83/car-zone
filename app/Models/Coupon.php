<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Coupon extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function findByCode(Request $request, $code)
    {
        return self::where('coupon_name',$code )->first();
    }

    public function discount($total)
    {
        return ($this->percent_off / 100) * $total;
    }

    public function admin(){
        return $this->hasMany(Admin::class,'admins_id','id');
    }
}
