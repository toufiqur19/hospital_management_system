<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkProces extends Model
{
    use HasFactory;
    protected $table = 'works_process';
    protected $fillable = [
        'sort_description',
        'number',
        'description',
        'image',
    ];
}
