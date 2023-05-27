<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;

class ProductAdminController extends Controller
{
    //
    public function index()
    {
        // $d = decrypt('$2y$10$rvvtSxQyMfVHgpRzydz7iuXumTEPyENBn4IK42kayzE4u6fbLRTmi');
        // print_r($d);
        // dd(Product::all());
        $product = Product::latest();
        // if (request('search')) {
        //     $product->where('type', request('type'));
        // }
        return view('admin.products.index')->with([
            'products' => $product->get()
        ]);
    }

    public function show(Product $product)
    {
        // dd(Product::find($product->id)->category->name);
        return view('admin.products.show')->with([
            'product' => Product::find($product->id)
        ]);
    }


    public function create()
    {
        return view('admin.products.create')->with([
            'categories' => Category::all(),
        ]);
    }

    public function store(Product $product)
    {

        $attributes = $this->validateProduct($product);

        $attributes['image'] = request()->file('image')->store('thubnails');

        Product::create($attributes);
        return redirect()->back();
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit')->with([
            'product' => $product,
            'categories' => Category::all(),
        ]);
    }

    public function update(Product $product)
    {


        $attributes = $this->validateProduct($product);

        if (isset($attributes['image'])) {
            $attributes['image'] = request()->file('image')->store('thbnails');
        }

        $product->update($attributes);

        return redirect(route('products'));
    }


    public function destroy(Product $product)
    {

        if ($product->image) {
            $image_path = '/storage' . $product->image;
            File::delete(public_path($image_path));
        }
        $product->delete();
        return redirect()->back();
    }

    protected function validateProduct(?Product $product = null): array
    {
        $product ??= new Product();
        return request()->validate([
            'image' => $product->exists ? ['image'] : ['required', 'image'],
            'name' => 'required',
            'slug' => ['required', Rule::unique('products', 'slug')->ignore($product->id)],
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'description' => 'required',
            'type' => 'required',
            'price' => 'required'

        ]);;
    }
}
