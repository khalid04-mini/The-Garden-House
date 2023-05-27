<?php

namespace App\Http\Controllers;

// use App\Models\Addresse;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Addresse;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        // dd(Order::where('status', 'delivred')->count());
        // dd(Order::where('status', 'delivred')->sum('total'));
        return view('admin.index')->with([
            'count_products' => Product::count(),
            'count_categories' => Category::count(),
            'count_clients' => User::where('is_admin', false)->count(),
            'count_orders' => Order::count(),
            'count_delivred_ordes' => Order::where('status', 'delivred')->count(),
            'earnings' => Order::where('status', 'delivred')->sum('total')
        ]);
    }


    public function orders()
    {


        $orders = Order::latest()->paginate(10);


        return view('admin.orders.index')->with([
            'orders' => $orders,
            // 'addresse' => $address,
        ]);
    }


    public function order_detail(Order $order)
    {
        return view('admin.orders.detail')->with([
            'order' => $order
        ]);
    }


    public function update(Order $order)
    {
        $attributes = request()->validate([
            'status' => 'required',
        ]);
        $order->update($attributes);

        // dd('done');
        return redirect()->back();
    }
    public function destroyorder(Order $order)
    {
        $order->delete();
        return redirect()->back();
    }
}
