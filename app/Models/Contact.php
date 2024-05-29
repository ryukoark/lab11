<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // código omitido

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
    ];
}

