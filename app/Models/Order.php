<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function shippingAddress(){

        $address = json_decode($this->attributes['delivery_address'], true);
        return $address;

    }
}
