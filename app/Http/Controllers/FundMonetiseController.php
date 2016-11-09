<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\models\FundMonetise;
use Illuminate\Http\Request;



class FundMonetiseController extends Controller
{

    /**
     * Send all the Fund Monetise
     *
     * @return mixed
     */
    public function index(){
        return response()->json(FundMonetise::all());
    }

}
