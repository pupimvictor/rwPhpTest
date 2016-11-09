<?php

use Illuminate\Database\Seeder;
use App\models\Client;

class ClientTableSeeder extends Seeder {

    public function run()
    {
        DB::table('clients')->delete();

        Client::create(array(
            'id' => 1,
            'name' => 'Client 1',
            'email' => 'client1@robustwealth.com'
        ));

        Client::create(array(
            'id' => 2,
            'name' => 'Client 2',
            'email' => 'client2@robustwealth.com'
        ));

        Client::create(array(
            'id' => 3,
            'name' => 'Client 3',
            'email' => 'client3@robustwealth.com'
        ));

        Client::create(array(
            'id' => 4,
            'name' => 'Client 4',
            'email' => 'client4@robustwealth.com'
        ));

        Client::create(array(
            'id' => 5,
            'name' => 'Client 5',
            'email' => 'client5@robustwealth.com'
        ));

        Client::create(array(
            'id' => 6,
            'name' => 'Client 6',
            'email' => 'client6@robustwealth.com'
        ));



    }

}