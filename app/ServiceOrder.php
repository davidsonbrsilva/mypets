<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function requester()
    {
        return $this->hasOne('App\User', 'id', 'requested_by');
    }

    public function acceptor()
    {
        return $this->hasOne('App\User', 'id', 'accepted_by');
    }

    public function animals()
    {
        return $this->belongsToMany('App\Animal', 'service_orders_animals', 'animal', 'service_order');
    }
}
