<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


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
            ->select('investments.id', 'funds.name as fund_name', 'clients.name as client_name', 'investments.moneyamount', 'investments.date')
            ->get();

        return response()->json($investments);
    }

    public function save(){
        $inputInvestment = Input::get();
        $inputInvestment['id'] = null;
        $inputInvestment['date'] = new \DateTime($inputInvestment['date']);

        $newInvestment = Investment::create($inputInvestment);

        return response()->json($newInvestment->id);
    }


}
