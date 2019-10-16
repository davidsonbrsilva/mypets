<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $guarded = [];
    protected $dates = ['deleted_at', 'birthday'];

    public function type()
    {
        return $this->hasOne('App\AnimalType', 'id', 'animal_type');
    }

    public function bleed()
    {
        return $this->hasOne('App\AnimalBleed', 'id', 'animal_bleed');
    }

    public function owners()
    {
        return $this->belongsToMany('App\User', 'users_animals', 'animal', 'user');
    }

    public function orders()
    {
        return $this->belongsToMany('App\ServiceOrder', 'service_orders_animals', 'service_order', 'animal');
    }
}
