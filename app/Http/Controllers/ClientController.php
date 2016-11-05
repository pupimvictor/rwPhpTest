<?php

namespace App\Http\Controllers\Client;


use App\models\Client;
use Illuminate\Http\Request;



class ClientController extends Controller
{

    /**
     * Send all the Clients
     *
     * @return mixed
     */
    public function index(){
        return response()->json(Client::all());
    }

}
