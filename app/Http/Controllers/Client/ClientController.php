<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client\Client;

class ClientController extends Controller
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

    public function index()
    {
        $clients = Client::all();
        return view('client.index',['clients' => $clients]);
    }

    public function show(Client $client)
    {
        return view('client.show',['client' => $client]);
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
