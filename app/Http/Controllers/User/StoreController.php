<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function create()
    {
        return view('User.store.create');
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        Store::create([
            'user_id' => Auth::guard('user')->user()->user_id,
            'name' => $req->name,
            'slug' => \Str::slug($req->name, '-'),
            'description' => $req->description
        ]);
        return back()->with('success', 'Toko Mu Berhasil Dibuat.');
    }
}
