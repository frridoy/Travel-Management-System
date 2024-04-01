<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transport extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];

    public function packages()
    {
        return $this->hasOne(Package::class,'transport_id', 'id');
    }
}
