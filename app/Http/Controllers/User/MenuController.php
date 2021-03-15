<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index(Request $req)
    {
        $menus = Menu::whereStoreId(Auth::guard('user')->user()->store->store_id)
            ->where(function ($query) use ($req) {
                if ($req->q) {
                    $query->where('name', 'LIKE', "%{$req->q}%");
                }
            })->paginate(5);
        if ($req->ajax()) {
            return view('User.menu.ajax.table-index', ['menus' => $menus])->render();
        }
        return view('User.menu.index', compact('menus'));
    }

    public function create()
    {
        return view('User.menu.create');
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'price' => 'required|regex:/^[\d\s,]*$/',
            'stock' => 'required|numeric',
            'description' => 'required'
        ]);
        Menu::create([
            'store_id' => Auth::guard('user')->user()->store->store_id,
            'name' => $req->name,
            'price' => str_replace(',', '', $req->price),
            'stock' => $req->stock,
            'description' => $req->description
        ]);
        return redirect()->route('merchant.menu')->with('success', 'Menu kamu berhasil dibuat');
    }
}
