<?php
/**
 * Created by PhpStorm.
 * User: victorpupim
 * Date: 11/4/16
 * Time: 4:53 PM
 */
use Illuminate\Database\Seeder;
use App\models\Investment;

class InvestmentTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('investments')->delete();

        Investment::create(array(
            'clientid' => 1,
            'fundid' => 10,
            'moneyamount' => 20000.0,
            'date' => new DateTime("now")));

        Investment::create(array(
            'clientid' => 1,
            'fundid' => 10,
            'moneyamount' => 10000.0,
            'date' => new DateTime("11/10/2016")));

        Investment::create(array(
            'clientid' => 1,
            'fundid' => 11,
            'moneyamount' => 20000.0,
            'date' => new DateTime("now")));

    //client2

        Investment::create(array(
            'clientid' => 2,
            'fundid' => 10,
            'moneyamount' => 5000.0,
            'date' => new DateTime("now")));

        Investment::create(array(
            'clientid' => 2,
            'fundid' => 10,
            'moneyamount' => 10000.0,
            'date' => new DateTime("10/10/2016")));

        Investment::create(array(
            'clientid' => 2,
            'fundid' => 11,
            'moneyamount' => 10000.0,
            'date' => new DateTime("10/20/2016")));

        Investment::create(array(
            'clientid' => 2,
            'fundid' => 12,
            'moneyamount' => 20000.0,
            'date' => new DateTime("10/22/2016")));

    //client3

        Investment::create(array(
            'clientid' => 3,
            'fundid' => 10,
            'moneyamount' => 8000.0,
            'date' => new DateTime("11/10/2016")));

        Investment::create(array(
            'clientid' => 3,
            'fundid' => 11,
            'moneyamount' => 20000.0,
            'date' => new DateTime("now")));

        Investment::create(array(
            'clientid' => 3,
            'fundid' => 12,
            'moneyamount' => 20000.0,
            'date' => new DateTime("now")));

        Investment::create(array(
            'clientid' => 3,
            'fundid' => 12,
            'moneyamount' => 10000.0,
            'date' => new DateTime("11/01/2016")));

        Investment::create(array(
            'clientid' => 3,
            'fundid' => 11,
            'moneyamount' => 50000.0,
            'date' => new DateTime("10/25/2016")));

    //client4
        Investment::create(array(
            'clientid' => 4,
            'fundid' => 10,
            'moneyamount' => 40000.0,
            'date' => new DateTime("now")));

        Investment::create(array(
            'clientid' => 4,
            'fundid' => 12,
            'moneyamount' => 8000.0,
            'date' => new DateTime("11/08/2016")));

        Investment::create(array(
            'clientid' => 4,
            'fundid' => 11,
            'moneyamount' => 20000.0,
            'date' => new DateTime("now")));

    //client5
        Investment::create(array(
            'clientid' => 5,
            'fundid' => 10,
            'moneyamount' => 30000.0,
            'date' => new DateTime("now")));

        Investment::create(array(
            'clientid' => 5,
            'fundid' => 11,
            'moneyamount' => 10000.0,
            'date' => new DateTime("11/05/2016")));

        Investment::create(array(
            'clientid' => 5,
            'fundid' => 12,
            'moneyamount' => 20000.0,
            'date' => new DateTime("now")));

    //client 6
        Investment::create(array(
            'clientid' => 6,
            'fundid' => 10,
            'moneyamount' => 120000.0,
            'date' => new DateTime("now")));

        Investment::create(array(
            'clientid' => 6,
            'fundid' => 11,
            'moneyamount' => 140000.0,
            'date' => new DateTime("11/10/2016")));

        Investment::create(array(
            'clientid' => 6,
            'fundid' => 12,
            'moneyamount' => 120000.0,
            'date' => new DateTime("now")));
    }
}