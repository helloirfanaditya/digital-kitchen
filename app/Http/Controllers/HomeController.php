<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Menu::with('store')->orderBy('created_at', 'asc')->limit(6)->get();
        return view('Customer.home', compact('products'));
    }
    public function detail($menu_id)
    {
        $product = Menu::with('store')->whereMenuId($menu_id)->firstOrFail();
        return view('Customer.detail', compact('product'));
    }
}
