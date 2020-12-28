<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //
    protected $table = "productos";

    protected $fillable = ["name", "slug", "description", "extract", "image", "visible", "price", "category_id"];

    public function category(){
        return $this->belongsTo("App\Categorias");
    }
}
