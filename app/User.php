<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [];
    protected $hidden = ['password'];
    protected $dates = ['deleted_at', 'birthday'];

    public function address()
    {
        return $this->hasOne('App\Address', 'id', 'address');
    }

    public function animals()
    {
        return $this->belongsToMany('App\Animal', 'users_animals', 'user', 'animal');
    }

    public function requestedOrders()
    {
        return $this->belongsTo('App\ServiceOrder', 'id', 'requested_by');
    }

    public function acceptedOrders()
    {
        return $this->belongsTo('App\ServiceOrder', 'id', 'accepted_by');
    }
}

class Admin extends User
{
    protected $table = 'users';

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(function ($query) {
            $query->where('is_admin', true);
        });
    }
}

class Caregiver extends User
{
    protected $table = 'users';

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(function ($query) {
            $query->where('is_caregiver', true);
        });
    }
}

class Owner extends User
{
    protected $table = 'users';

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(function ($query) {
            $query->where('is_admin', false)->where('is_caregiver', false);
        });
    }
}