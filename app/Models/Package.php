<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];



    public function hotels()
    {
        return $this->belongsTo(Hotel::class,'hotel_id','id');
    }

    public function transports()
    {
        return $this->belongsTo(Transport::class,'transport_id','id');
    }
}
