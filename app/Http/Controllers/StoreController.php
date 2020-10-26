<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class StoreController extends Controller
{
    //
    public function index(){
        $productos= Productos::all();
        //dd($productos);
        return view("store.index", compact("productos"));
    }

    public function show($slug)
    {
        $product = Productos::where("slug", $slug)->first();
        //dd($product);
        return view("store.show", compact("product"));
    }
}
