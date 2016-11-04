<?php

use Illuminate\Database\Seeder;
use App\models\Client;

class ClientTableSeeder extends Seeder {

    public function run()
    {
        DB::table('clients')->delete();

        Client::create(array(
            'name' => 'Client 1',
            'email' => 'client1@robustwealth.com'
        ));

        Client::create(array(
            'name' => 'Client 2',
            'email' => 'client2@robustwealth.com'
        ));

        Client::create(array(
            'name' => 'Client 3',
            'email' => 'client3@robustwealth.com'
        ));

        Client::create(array(
            'name' => 'Client 4',
            'email' => 'client4@robustwealth.com'
        ));

        Client::create(array(
            'name' => 'Client 5',
            'email' => 'client5@robustwealth.com'
        ));

        Client::create(array(
            'name' => 'Client 6',
            'email' => 'client6@robustwealth.com'
        ));

        Client::create(array(
            'name' => 'Client 7',
            'email' => 'client7@robustwealth.com'
        ));

        Client::create(array(
            'name' => 'Client 8',
            'email' => 'client8@robustwealth.com'
        ));

    }

}