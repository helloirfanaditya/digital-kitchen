<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add_to_cart(Request $req, $menu_id)
    {
        $product = Menu::with('store')->whereMenuId($menu_id)->first();
        Cart::add([
            'id' => $product->menu_id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $req->qty,
            'attributes' => array(
                'toko' => $product->store->name,
                'store_id' => $product->store->store_id
            )
        ]);
        return response([
            'code' => 200,
            'total' => Cart::getTotalQuantity()
        ]);
    }

    public function cartView()
    {
        $carts = Cart::getContent();
        return view('Customer.cart', compact('carts'));
    }
}
