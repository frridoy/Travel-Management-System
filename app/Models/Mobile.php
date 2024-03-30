<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $fillable = ['model', 'consumer_id'];

    // public function consumer()
    // {
    //     return $this->belongsTo(Consumer::class);
    // }
    public function consumer()
    {
        return $this->belongsTo(Consumer::class, 'consumer_id', 'cid');
    }

}
