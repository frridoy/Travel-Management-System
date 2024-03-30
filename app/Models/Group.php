<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $primaryKey='group_id';
    protected $fillable = ['group_name', 'group_topic'];

    // public function member()
    // {
    //     return $this->hasOne(Member::class, 'group_id');
    // }

}

