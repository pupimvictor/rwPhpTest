<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InvestmentController extends Controller
{

    /**
     * Send all the Investments
     *
     * @return mixed
     */
    public function index()
    {
        $investments = DB::table('investments')
            ->join('clients', 'investments.clientid','=', 'clients.id')
            ->join('funds', 'investments.fundid', '=', 'funds.id')
            ->select('investments.id', 'funds.name', 'clients.name', 'investments.moneyamount', 'investments.date')
            ->get();

        return response()->json($investments);
    }

}
