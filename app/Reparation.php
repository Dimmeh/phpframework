<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reparation extends Model
{
    protected $fillable = [
        'user_id',
        'surname',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'zipcode',
        'description'
    ];
}
