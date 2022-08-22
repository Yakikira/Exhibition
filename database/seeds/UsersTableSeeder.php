<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'                  =>'user6',
            'company_name'          =>'company6',
            'company_dept'          =>'dept6',
            'business_category'     =>'category6',
            'tell'                  =>'05000000000',
            'email'         =>'user6@example.com',
            'adress'          =>'adress6',
            'password'      =>Hash::make('12345678'),
            'remember_token'=>Str::random(10),
            ]);
    }
}
