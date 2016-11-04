<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Eloquent::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(FundTableSeeder::class);
        $this->command->info('Tables seeded.');
    }
}
