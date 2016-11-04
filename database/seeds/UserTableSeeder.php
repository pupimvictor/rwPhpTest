<?php
/**
 * Created by PhpStorm.
 * User: victorpupim
 * Date: 11/4/16
 * Time: 4:22 PM
 */
use \Illuminate\Database\Seeder;
use App\User;

Class UserTableSeeder extends Seeder {
    public function run(){
        DB::table('users')->delete();

        User::create(array(
            'name' => 'admin',
            'email' => 'admin@robustwealth.com',
            'password' => '1234'
        ));
    }
}