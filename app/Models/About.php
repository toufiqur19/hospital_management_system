<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'title',
        'email',
        'mobile',
        'service_time',
        'description',
        'image',
    ];
}
