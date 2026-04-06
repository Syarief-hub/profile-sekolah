<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'type',
        'position',
        'nip',
        'image',
        'order_number',
    ];
}
