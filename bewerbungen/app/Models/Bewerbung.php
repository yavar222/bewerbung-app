<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bewerbung extends Model
{
    protected $fillable = [
        'status',
        'company',
        'title',
        'city',
        ];
}
