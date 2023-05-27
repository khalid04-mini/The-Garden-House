<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Adresse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    //

    public function store()
    {

        $attributes = request()->validate(
            [
                'email' => ['required', Rule::unique('users', 'email'), 'email:strict'],
                'password' => 'required|min:5|max:15',
            ]
        );

        $attributes['password'] = bcrypt($attributes['password']);
        User::create($attributes);
        // if (auth()->attempt(User::create($attributes))) {
        //     dd(auth()->id());

        //     // return redirect()->back();
        // }
        session()->regenerate();
        // dd(auth()->id());
        // Adresse::create([
        //     'user_id' => auth()->id()
        // ]);
        return redirect()->route('pagelogin');
    }
}
