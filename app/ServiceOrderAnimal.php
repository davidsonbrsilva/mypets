<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceOrderAnimal extends Model
{
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    protected $table = 'service_orders_animals';
}
