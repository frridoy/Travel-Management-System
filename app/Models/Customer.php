<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="customers";
    protected $primaryKey="customer_id";
    protected $fillable = ['customer_name', 'email', 'address', 'number', 'country'];


    public function setCustomerNameAttribute($value)
    {
        $this->attributes ['customer_name']=ucwords($value);
    }



    // public function setemaillAttribute($value){
    //     $this->attributes ['email']=strtolower($value);
    // }f


}
