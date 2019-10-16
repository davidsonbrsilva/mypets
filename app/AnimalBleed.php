<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimalBleed extends Model
{
    protected $guarded = [];
    protected $dates = ['deleted_at'];
}
