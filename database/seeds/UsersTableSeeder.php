<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'company_id' => '1',
            'name'       => 'Naira Aleixo Gamarra', 
            'email'      => 'naira.gamarra@gmail.com',
            'password'   => bcrypt('jg04112007'),
        ]);
    }
}
