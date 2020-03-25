<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name', 'address', 'postcode', 'city', 'state', 'country_id', 'postcode', 'phone', 'email'];


}
