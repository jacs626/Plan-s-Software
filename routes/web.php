<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::bind('product',function($slug) {
    return App\Productos::where("slug",$slug)->first();
});

Route::bind('category',function($category) {
    return App\Categorias::find($category);
});

Route::get('/', [
    "as"=>"home",
    "uses"=>"StoreController@index"
]);

Route::get('product/{slug}', [
    "as"=>"product-detail",
    "uses"=>"StoreController@show"
]);

//Carrito

Route::get('cart/show', [
    "as"=>"cart-show",
    "uses"=>"CartController@show"
]);

Route::get('cart/add/{product}',[
    "as"=>"cart-add",
    "uses"=>"CartController@add"
]);

Route::get('cart/delete/{product}',[
    "as"=>"cart-delete",
    "uses"=>"CartController@delete"
]);

Route::get('cart/trash',[
    "as"=>"cart-trash",
    "uses"=>"CartController@trash"
]);

Route::get('cart/update/{product}/{quantity}',[
    "as"=>"cart-update",
    "uses"=>"CartController@update"
]);

Route::get("/login","ConnectController@getLogin");


//admin----

Route::get('admin/home', function () {
    return view ("admin.home");
});

Route::get('admin/home', [
    "middleware"=>"auth",
    "as"=>"admin-home",
    "uses"=>"HomeController@index"
]);

Route::resource('admin/category', "Admin\CategoryController",["middleware"=>"auth"]);

Route::resource('admin/product', "Admin\ProductController",["middleware"=>"auth"]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
