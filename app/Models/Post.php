<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'post_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Post::class, 'post_tag', 'post_id', 'tag_id');
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable', 'imageable_type', 'imageable_id', 'id');
    }

    /*
    Explicación de los Parámetros
        Modelo Relacionado (Image::class): Especifica el modelo que se relaciona con el modelo actual.
        Nombre del Campo Polimórfico (imageable): Es el prefijo común utilizado para las columnas imageable_type y imageable_id en la tabla images.
        Campo de Tipo (imageable_type): Especifica la columna que contiene el nombre del modelo relacionado.
        Campo de ID (imageable_id): Especifica la columna que contiene el ID del modelo relacionado.
        Clave Local (id): Especifica la clave primaria del modelo actual. Este parámetro es opcional y se asume que es id si no se especifica.
    */
    
}
