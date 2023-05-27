<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Addresse;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function index()
    {
        // dd(Category::count());
        if (auth()->guest()) {
            // dd(auth()->guest());
            return view('my-account');
        } else if (auth()->user()->is_admin) {
            return redirect()->route('admin');
        } else {
            // return (
            $client = User::find(auth()->user()->id);
            // dd(auth()->user()->id);
            if (!count($client->addresses)) {
                Addresse::create([
                    'user_id' => auth()->user()->id
                ]);
            }
            return redirect()->route('dashboard');
            // );
            // redirect()->route('dashboard');
            // if (count($client->addresses)) {
            //     dd($client->addresses);
            // }
        }
    }
    public function store()
    {
        // hadi login o password kan verifiwhom o kandirohom f hadak l varianle attributes
        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);
        // dd($attributes)
        // kanchdo hadak login o kan checkiw b hadik attempt fach kanl9awh kat creya lina session o katwli connected

        if (auth()->attempt($attributes)) {
            return redirect()->back();
        }

        // auth failed 
        // return back za3ma rj3na fiin kna
        return back();
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->route('pagelogin');
    }
}
