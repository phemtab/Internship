<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class userinfo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'NameEvent',
        'UserFirstName',
        'UserLastName',
        'email',
        'telephone',
        'UserPic'
    ];  
}
