<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceOrderAddress extends Model
{
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    protected $table = 'service_orders_addresses';
}
