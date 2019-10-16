<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimalType extends Model
{
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function animal()
    {
        return $this->belongsTo('App\Animal', 'id', 'animal_type');
    }
}
