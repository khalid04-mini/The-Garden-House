<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use function Termwind\render;

class CategoryAdminController extends Controller
{
    //
    public function index()
    {
        // dd(Category::all()->slug);
        return view('admin.categories.index')->with([
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('admin.categories.show')->with([
            'category' => Category::find($category->id)
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Category $category)
    {
        $attributes = request()->validate([
            'name' => ['required', Rule::unique('categories', 'name')],
            'slug' => ['required', Rule::unique('categories', 'slug')]
        ]);

        Category::create($attributes);
        return redirect()->back();
    }
    // public function store(Request $request)
    // {
    //     request()->validate([
    //         'name' => ['required', Rule::unique('categories', 'name')],
    //         'slug' => ['required', Rule::unique('categories', 'slug')]
    //     ]);

    //     $categoriename = request()->input('name');
    //     $lengt = (count($categoriename));

    //     for ($x = 0; $x < $lengt; $x++) {
    //         $data = new Category();
    //         $data->name = request()->name[$x];
    //         $data->slug = request()->slug[$x];
    //         $data->save();
    //     }
    //     return redirect(route('categories'));
    // }
    public function edit(Category $category)
    {
        return view('admin.categories.edit')->with([
            'category' => $category
        ]);
    }

    public function update(Category $category)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'slug' => ['required', Rule::unique('products', 'slug')->ignore($category->id)],
        ]);

        $category->update($attributes);
        return redirect(route('categories'));
    }



    public function destroy(Category $category)
    {

        $category->delete();
        return redirect()->back();
    }
}
