<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class screenlist extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'timestart', 'timeend', 'datestart', 'dateend', 'device_id', 'background_id', 'uuid', 'people', 'visitors', 'message_top', 'message_bot', 'theme',  
    ];
}
