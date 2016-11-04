<?php

namespace App\Http\Controllers;


use App\models\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ClientController extends Controller
{

    public function index(){
        return Response::json(Client::get());
    }

}
