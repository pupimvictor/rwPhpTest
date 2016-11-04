<?php

namespace App\Http\Controllers;

use App\models\Fund;


class FundController extends Controller
{
    public function index(){
        return response()->json(Fund::all());
    }
}
