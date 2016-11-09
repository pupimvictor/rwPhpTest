<?php
/**
 * Created by PhpStorm.
 * User: victorpupim
 * Date: 11/4/16
 * Time: 4:53 PM
 */
use Illuminate\Database\Seeder;
use App\models\FundMonetise;

class FundMonetiseTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('fundmonetises')->delete();

        FundMonetise::create(array(
            'fundid' => 10,
            'rate' => 2,
            'date' => new DateTime("11/08/2016")
        ));

        FundMonetise::create(array(
            'fundid' => 10,
            'rate' => -1,
            'date' => new DateTime("10/10/2016")
        ));

        FundMonetise::create(array(
            'fundid' => 11,
            'rate' => -3,
            'date' => new DateTime("11/08/2016")
        ));

        FundMonetise::create(array(
            'fundid' => 11,
            'rate' => 2,
            'date' => new DateTime("10/10/2016")
        ));

        FundMonetise::create(array(
            'fundid' => 12,
            'rate' => 5,
            'date' => new DateTime("11/08/2016")
        ));

        FundMonetise::create(array(
            'fundid' => 12,
            'rate' => 2,
            'date' => new DateTime("10/10/2016")
        ));
    }
}