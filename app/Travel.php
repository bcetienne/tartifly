<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = [
        'label',
        'country',
        'city',
        'date_begin',
        'date_end',
        'cost',
        'photo',
        'description',
        'dispo',
        'user_id'
    ];
}
