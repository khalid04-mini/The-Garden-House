<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ClientAdminController extends Controller
{
    //

    public function index()
    {
        $addresse = User::latest()->get();
        // dd($addresse[0]->addresses);
        return view('admin.clients.index')->with([
            'clients' => User::all(),
        ]);
    }

    public function show(User $user)
    {
        // dd()
        return view('admin.clients.show')->with([
            'user' => $user,
            'orders' => $user->orders,
            'addresses' => $user->addresses,

        ]);
    }

    public function switch(User $user)
    {

        // dd($user->id);
        // dd(request('is_admin'));
        $attributes = [
            'is_admin' => request('is_admin'),
        ];
        // dd($attributes);
        $user->update($attributes);

        // dd('done');
        return redirect()->back();
    }
}
