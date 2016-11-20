<?php

namespace App;

use App\Business\MongoEloquentModel as Model;

class Shipping extends Model
{
    const CART_CONDITION_TYPE = 'shipping';

    protected $fillable = [
        'first_name', 'last_name', 'email', 'address', 'address_2', 'city', 'postal_code', 'phone', 'country', 'province', 'fax', 'phone'
    ];
}