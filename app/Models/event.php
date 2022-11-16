<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class event extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'NameEvent',
        'OwnerFirstName',
        'OwnerLastName',
        'Amount',
        'location_event',
        'description_event',
        'timestart',
        'timeend',
        'datestart',
        'dateend',
        'dynamic_0',
        'dynamic_2',
        'dynamic_4',
        'dynamic_6',
        'status'
    ];
}
