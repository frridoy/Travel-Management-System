<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table='members';
    protected $primaryKey='member_id';
    protected $fillable = ['member_name', 'member_email', 'member_phone'];

    // function getGroup()
    // {
    //     return $this->hasOne(Group::class, 'group_id');
    // }
}
