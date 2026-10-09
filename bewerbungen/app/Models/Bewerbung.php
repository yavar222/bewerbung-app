<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bewerbung extends Model
{
    protected $fillable = [
        'name',
        'company',
        'title',
        'city',
        ];
}
