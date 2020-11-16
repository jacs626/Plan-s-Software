<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;


class CartController extends Controller
{
    function __construct() 
    {
        if(!session()->has('cart')) session()->put('cart', array());
    }

    //show cart
    public function show()
    {
        $cart = session()->get('cart');
        $total = $this->total();
        return view("store.cart", compact("cart", "total"));
    }
    //add item
    public function add(Productos $product)
    {
        $cart = session()->get('cart');
        $product->quantity = 1;
        $cart[$product->slug] = $product;
        session()->put('cart', $cart);

        return redirect()->route("cart-show");
    }

    //delete item
    public function delete(Productos $product)
    {
        $cart = session()->get('cart');
        unset($cart[$product->slug]);
        session()->put('cart', $cart);

        return redirect()->route("cart-show");
    }

    //update item
    public function update(Productos $product, $quantity)
    {
        $cart = session()->get('cart');
        $cart[$product->slug]->quantity = $quantity;
        session()->put('cart', $cart);
        return redirect()->route("cart-show");
    }

    //trash cart
    public function trash(Productos $product)
    {
        session()->forget('cart');
        return redirect()->route("cart-show");
    }
    //total
    private function total()
    {
        $cart = session()->get('cart');
        $total = 0;
        foreach ($cart as $item) {
            $total += $item->price * $item->quantity;
        }
         return $total;
    }
}
