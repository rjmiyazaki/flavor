<?php

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'cnpj'         => '2420303000163',
            'name'         => 'Naira Gamarra Brigaderia',
            'contact_name' => 'Naira Gamarra',
            'email'        => 'naira.gamarra@gmail.com',
            'phonenumber'  => '41992668652', 
        ]);
    }
}
