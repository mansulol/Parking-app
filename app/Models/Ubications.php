<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubications extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ubication',
        'price',
    ];
}
