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

    public function scopeSearch($query, $terms){
        collect(explode(" ", $terms))
            ->filter()
            ->each(function($term) use($query){
                $term = '%'.$term.'%';

                $query->where('name', 'like', $term)
                    ->orWhere('artist', 'like', $term)
                    ->orWhere('code', 'like', $term)
                    ->orWhere('price', 'like', $term);
            });


    }
}
