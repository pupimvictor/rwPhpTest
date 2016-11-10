<?php


namespace App\Http\Controllers;

use App\Services\FundOperations;
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
        $funds = FundOperations::listwUpDown();
        return response()->json($funds);
    }


}
