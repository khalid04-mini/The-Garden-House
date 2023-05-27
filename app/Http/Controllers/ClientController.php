<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Order;
use App\Mail\OrderMail;
use Illuminate\Log\Logger;

use App\Models\DetailOrder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


// use App\Http\Controllers\PaymentController;

class ClientController extends Controller
{
    //



    public function dashboard()
    {
        return view('my-account.dashboard')->with([
            'email' => auth()->user()->email
        ]);
    }
    public function accountdetails()
    {
        $client = User::find(auth()->user()->id);

        return view('my-account.editaccount', [
            'first_name' => $client->addresses[0]->first_name,
            'last_name' => $client->addresses[0]->last_name
        ]);
    }

    public function editaddresses()
    {
        $client = User::find(auth()->user()->id);
        // dd();
        return view('my-account.edit-address', [
            'addresses' => $client->addresses
        ]);
    }

    public function updatedetails()
    {
        $names = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);
        $client = User::find(auth()->user()->id);

        $address = $client->addresses[0];
        $address->update($names);

        $emailupdate = request()->validate([
            'email' => 'required',
        ]);
        $user = User::find(auth()->user()->id);
        $user->update($emailupdate);

        if (request()->password || request()->password_confirmation) {
            request()->validate([
                'current_password' => 'required',
            ]);
        }
        if (request()->current_password) {

            if (Hash::check(request()->current_password, Auth::user()->password)) {
                request()->validate([
                    'password' => 'required|confirmed|required_with:password_confirmation|same:password_confirmation',
                    'password_confirmation' => 'required'
                ], [
                    'password_confirmation.required' => 'Please re-enter your password.',
                    'password.confirmed' => 'New passwords do not match. ',
                ]);
                $newpassword = bcrypt(request()->password);

                $client = User::find(auth()->id());
                $client->update([
                    'password' => $newpassword
                ]);
            }
        }
        // dd($changepassword);
        return redirect()->back();
    }


    public function checkout()
    {
        $client = User::find(auth()->user()->id);
        return view('my-account.checkout')->with([
            'addresses' => $client->addresses
        ]);
    }
    public function check()
    {
        if (request()->product_price[0] === 300) {
            dd('true');
        }

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'addresse_id' => request()->addresse_id,
            'shipping_type' => request()->shipping_type,
            'payment_method' => request()->payment_method,
            'note' => request()->note ? request()->note : ' ',
            'total' => request()->total
        ]);



        $orderId = $order->id;

        $products = request()->input('product_id');
        $lengt = (count($products));

        for ($x = 0; $x < $lengt; $x++) {
            $data = new DetailOrder();

            $data->quantity = request()->quantity[$x];
            $data->order_id = $orderId;
            $data->product_id = request()->product_id[$x];
            $data->save();
        }

        return redirect()->route('vieworder', $orderId);
    }


    public function orders()
    {
        // dd(DetailOrder::all());
        // dd(DetailOrder::first());
        $client = User::find(auth()->user()->id);
        $order = 'ks';
        $orderdetail = 'jsdk';

        // dd($order);

        Mail::to(auth()->user()->email)->send(new OrderMail());
        return (view('my-account.orders')->with([
            'orders' => $client->orders,
            // 'details'=> Order::all()->detail_order
        ])
        );
    }

    public function vieworder(Order $order)
    {

        // $c = DetailOrder::where('order_id', $order->id)->get();
        // dd($c[1]->product->name);

        // dd(DetailOrder::first()->product);
        return view('my-account.view-order')->with([
            'order' => $order,
            'detail' => DetailOrder::where('order_id', $order->id)->get()
        ]);
    }
}
