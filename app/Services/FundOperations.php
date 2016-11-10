<?php
/**
 * Created by PhpStorm.
 * User: victorpupim
 * Date: 11/10/16
 * Time: 12:38 AM
 */

namespace App\Services;


use App\models\Fund;
use App\models\FundMonetise;
use Illuminate\Support\Facades\DB;

class FundOperations
{

    /**
     * Calculate the sum of the ups and downs and return the list of the funds
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function listwUpDown(){
        $funds = Fund::All();
        foreach ($funds as $fund){
               $fund['up'] = DB::table('fundmonetises')
                   ->where([
                       ['fundid', '=', $fund['id']],
                       ['rate', '>', 0]
                    ])
                   ->sum('rate');
                $fund['down'] = DB::table('fundmonetises')
                    ->where([
                        ['fundid', '=', $fund['id']],
                        ['rate', '<', 0]
                    ])
                    ->sum('rate');
        }
        return $funds;
    }

    /**
     * Update the risk rate of a fund. Called after a fund monetisation
     *
     * risk rate = average of the fund moentisations of the fund
     *
     * @param $fundId
     */
    public static function updateRisk($fundId){
        $fund = Fund::find($fundId);

        $fund['riskrate'] = DB::table('fundmonetises')
            ->where('fundid', '=', $fundId)
            ->avg('rate');

        $fund->save();
    }

}