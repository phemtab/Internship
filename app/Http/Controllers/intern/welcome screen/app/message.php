<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    //
    protected $fillable = [
        'name',
        'profile',
        'department',
        'company',
        'show_message'
    ];
}
