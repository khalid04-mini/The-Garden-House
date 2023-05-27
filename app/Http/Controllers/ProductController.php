<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Log\Logger;
use App\Models\DetailOrder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProductController extends Controller
{
    //

    public function showFlowers(Product $product)
    {
        $products = Product::where('type', 'flower');
        $max = request('range-max') ? request('range-max') : intval(Product::max('price'));
        $min = request('range-min') ? request('range-min') : '0';

        if (request()->search) {
            $products = Product::where('type', 'flower')->where('name', 'like', '%' . request()->search . '%')
                ->orWhere('description', 'like', '%' . request()->search . '%');
        } else if (request('range-max')) {
            $products = Product::where('type', 'flower')->whereBetween('price', [request('range-min'), request('range-max')]);
        } else if (request('category')) {
            $products = Product::where('type', 'flower')->where('category', request('category'));
        }

        // dd(count($products->get()) === 0);
        return view('products')->with([
            'products'  => $products->get(),
            'typeprod' => 'Flowers',
            'categories' => Category::all(),
            'max' => $max,
            'min' => $min
        ]);
    }

    public function showPlants(Product $product)
    {
        $products = Product::where('type', 'plant');
        $max = request('range-max') ? request('range-max') : intval(Product::max('price'));
        $min = request('range-min') ? request('range-min') : '0';

        if (request()->search) {
            $products = Product::where('type', 'plant')->where('name', 'like', '%' . request()->search . '%')
                ->orWhere('description', 'like', '%' . request()->search . '%');
        } else if (request('range-max')) {
            $products = Product::where('type', 'plant')->whereBetween('price', [request('range-min'), request('range-max')]);
        } else if (request('category')) {
            $products = Product::where('type', 'plant')->where('category', request('category'));
        }

        return view('products')->with([
            'products'  => $products->get(),
            'typeprod' => 'Flowers',
            'categories' => Category::all(),
            'max' => $max,
            'min' => $min
        ]);
    }

    public function show(Product $product)
    {
        // dd(Product::find($product));
        return view('product')->with([
            'product'  => Product::find($product->id),
        ]);
    }
}
