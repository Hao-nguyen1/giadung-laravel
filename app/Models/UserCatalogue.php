<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCatalogue extends Model
{
    use HasFactory , SoftDeletes;

    protected $filltable = [
        'name',
        'publish'
    ];

    protected $table = 'user_catalogues';
}
