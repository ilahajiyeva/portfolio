<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'html',
        'css',
        'javascript',
        'php',
        'laravel',
        'mysql',
        'c',
        'net',
        'bootstrap',
        'status'
    ];
}
