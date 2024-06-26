<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carusel extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'sort_description'
    ];
    
}
