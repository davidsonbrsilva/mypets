<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->belongsTo('App\User', 'id', 'address');
    }
}
