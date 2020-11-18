<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categorias;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationData;
use Symfony\Component\Console\Question\ConfirmationQuestion;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorias = Categorias::all();
        //dd($categorias);
        return view("admin.category.index",compact("categorias"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();



        $validatedData = $request->validate([
            'name' => "required|unique:categorias|max:255",
            "description" => "required",
            "color" => "required",
        ]);
    
        // En caso de que se haya pasado la validación.
        
        Categorias::create([
            "name" => $request->get("name"),
            "slug" => Str::slug($request->get("name")),
            "description" => $request->get("description"),
            "color" => $request->get("color")
        ]);

        $messagge = $validatedData ? "Categoria agregada correctamente!: " : "La Categoria NO pudo agregarse!";
        echo $messagge;
        return redirect()->route("category.index")->with("messagge",$messagge);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categorias $category)
    {
        //
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorias $category)
    {
        //
        return view("admin.category.edit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorias $category)
    {
        $category->fill($request->all());
        $category->slug = Str::slug($request->get("name"));

        $updated = $category->save();

        $messagge = $updated ? "Categoria Actualizada correctamente! " : "La Categoria NO pudo actualizarse";

        return redirect()->route("category.index")->with("messagge",$messagge);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorias $category)
    {
        $deleted = $category->delete();

        $messagge = $deleted ? "Categoria eliminada correctamente! " : "La Categoria NO pudo eliminarse";

        return redirect()->route("category.index")->with("messagge",$messagge);
    }
}
