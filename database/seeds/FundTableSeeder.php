<?php
/**
 * Created by PhpStorm.
 * User: victorpupim
 * Date: 11/4/16
 * Time: 4:53 PM
 */
use Illuminate\Database\Seeder;
use App\models\Fund;

class FundTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('funds')->delete();

        Fund::create(array(
            'name' => 'Fund A',
            'moneyamount' => 1000000.80,
            'riskrate' => 2
        ));

        Fund::create(array(
            'name' => 'Fund b',
            'moneyamount' => 3500000.00,
            'riskrate' => -2
        ));

        Fund::create(array(
            'name' => 'Fund C',
            'moneyamount' => 2500000.00,
            'riskrate' => 4
        ));
    }
}