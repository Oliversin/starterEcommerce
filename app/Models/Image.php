<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'url',
    ];

    public function imageable(): MorphTo
    {
        return $this->morphTo();
        /* Aqui fue donde me detuve un buen rato al pensar que estaba haciendo algo mal intente varias cosas antes de topar con el error del Seeder*/
        //return $this->morphTo(__FUNCTION__, 'imageable_type', 'imageable_id');
    }
}
