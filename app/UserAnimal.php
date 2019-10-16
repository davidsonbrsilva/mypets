<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnimal extends Model
{
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    protected $table = 'users_animals';
}
