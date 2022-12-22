<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    use HasFactory;

    protected $table = 'arts';

    protected $fillable = [
        'name',
        'artist',
        'code',
        'description',
        'price',
        'status',
    ];
}
