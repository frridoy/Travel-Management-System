<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];


    public function transports()
    {
        return $this->hasOne(Transport::class, 'destination_id','id');
    }
}
