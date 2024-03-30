<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    use HasFactory;
    protected $primaryKey = 'cid';
    protected $guarded = [];

    // protected $fillable = ['name', 'email'];

    public function mobiles()
    {
        return $this->hasOne(Mobile::class,'consumer_id', 'cid');
    }
    
}
