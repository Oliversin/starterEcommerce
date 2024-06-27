<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'price',
        'stock',
    ];

    /**Primera vez usando relaciones morph en un escenario real, es una forma muy practica de ligar cosas a distintas tablas */
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
