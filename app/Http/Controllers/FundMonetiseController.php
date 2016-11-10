<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\models\FundMonetise;
use App\Services\FundOperations;
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

    /**
     * Save the Fund Monetise
     *
     * @return mixed
     */
    public function save(){
        $inputFundMonetise = Input::get();
        $inputFundMonetise['id'] = null;
        $inputFundMonetise['date'] = new \DateTime($inputFundMonetise['date']);

        $newFundMonetise = Investment::create($inputFundMonetise);

        if($newFundMonetise->id){
            FundOperations::updateRisk($newFundMonetise->fundid);
        }

        return response()->json($newFundMonetise->id);
    }

}
