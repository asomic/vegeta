<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client\Client;
use App\Models\Client\Order;
use App\Models\Client\OrderItem;


class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Client $client)
    {
        return view('client.order.create',['client' => $client]);
    }

    public function show(Client $client, Order $order)
    {
        return view('client.order.show',[
            'client' => $client,
            'order' => $order
            ]);
    }

    public function store(Request $request)
    {
        $client = new Client; 
        $client->rut = $request->rut;
        $client->razon_social = $request->razon;
        $client->giro = $request->giro;
        $client->save();
        return redirect()->route('client.show',['client' => $client->id]);
    }
}
