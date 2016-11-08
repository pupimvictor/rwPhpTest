<?php


namespace App\Http\Controllers;

use App\models\Fund;
use Illuminate\Support\Facades\Input;
use \App\Http\Controllers\Controller ;


class FundController extends Controller
{

    /**
     * Send all the Funds
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){

        return response()->json(Fund::all());
    }

    public function updateRisk(){
        $fund = Fund::find(Input::get('id'));
        $fund->riskrate = Input::get('newriskrate');

        $fund->save();

        return response()->json(array('success' => true));
    }

    public function updateMoneyAmount(){
        $fund = Fund::find(Input::get('id'));
        $fund->moneyamount = Input::get('newmoneyamount');

        $fund->save();

        return response()->json(array('success' => true));
    }
}
