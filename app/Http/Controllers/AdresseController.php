<?php

namespace App\Http\Controllers;

use App\Models\Addresse;
use Illuminate\Http\Request;

class AdresseController extends Controller
{
    //
    public function create()
    {
        return view('my-account.add-address');
    }


    public function store(Addresse $adresse)
    {
        $attributes = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'phone' => 'required',
            'user_id' => ''
        ]);
        $attributes['user_id'] = auth()->user()->id;
        Addresse::create($attributes);
        return redirect()->route('editaddresses');
    }


    public function edit(Addresse $adresse)
    {
        return view('my-account.updateaddresse')->with([
            'addresse' => $adresse,
        ]);
    }
    public function update(Addresse $adresse)
    {
        $attributes = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'phone' => 'required',

        ]);
        // $attributes['user_id'] = auth()->user()->id;
        $adresse->update($attributes);
        return redirect()->route('editaddresses');
    }

    public function destroy(Addresse $adresse)
    {
        $adresse->delete();
        return redirect()->back();
    }
}
