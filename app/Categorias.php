<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    //
    protected $table = "categorias";

    protected $fillable = ["name", "slug", "description", "color"];

    public $timestamps = false;

    public function products(){
        return $this->hasMany("App\Productos");
    }
}
