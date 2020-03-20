<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'address', 'postcode', 'city', 'state', 'country', 'postcode', 'phone', 'email'];

    public function customer_fields()
    {
        return $this->hasMany(CustomersField::class);


    }
}
