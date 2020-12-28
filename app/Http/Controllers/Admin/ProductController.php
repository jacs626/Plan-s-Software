<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProductRequest;
use App\Categorias;
use App\Productos;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationData;
use Symfony\Component\Console\Question\ConfirmationQuestion;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Productos::orderBy("id","desc")->paginate(5);
        //dd($productos);
        return view("admin.product.index",compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Categorias::orderBy("id","desc")->pluck("name","id");
        //dd($categories);
        return view("admin.product.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProductRequest $request)
    {
        //return $request->all();
        $data = [
            "name"              => $request->get("name"),
            "slug"              => Str::slug($request->get("name")),
            "description"       => $request->get("description"),
            "extract"           => $request->get("extract"),
            "price"             => $request->get("price"),
            "image"             => $request->get("image"),
            "visible"           => $request->has("visible") ? 1 : 0,
            "category_id"       => $request->get("category_id")
        ];
        // En caso de que se haya pasado la validación.
        
        $product = Productos::create($data);

        $messagge = $product ? "Producto agregado correctamente!: " : "El Producto NO pudo agregarse!";
        echo $messagge;
        return redirect()->route("product.index")->with("messagge",$messagge);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $producto)
    {
        //
        return $producto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $product)
    {
        //
        $categories= Categorias::orderBy("id","desc")->pluck("name","id");
        return view("admin.product.edit", compact("categories","product"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveProductRequest $request, Productos $product)
    {
        $product->fill($request->all());
        $product->slug = Str::slug($request->get("name"));
        $product->visible = $request->has("visible") ? 1:0;

        $updated = $product->save();

        $messagge = $updated ? "Producto Actualizado correctamente! " : "El Producto NO pudo actualizarse";

        return redirect()->route("product.index")->with("messagge",$messagge);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $product)
    {
        $deleted = $product->delete();

        $messagge = $deleted ? "Producto eliminado correctamente! " : "El Producto NO pudo eliminarse";

        return redirect()->route("product.index")->with("messagge",$messagge);
    }
}

