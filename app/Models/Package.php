<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function hotels()
    {
        return $this->belongsTo(Hotel::class,'hotel_id','id');
    }
}
