<?php

namespace App;

use Conner\Tagging\Taggable;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Indicar a laravel que este modelo utilizará el sistema de etiquetas provisto por el paquete laravel-tagging
    use Taggable;

    protected $fillable = ['name', 'description'];
}
