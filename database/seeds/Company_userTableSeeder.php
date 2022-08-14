<?php

use Illuminate\Database\Seeder;

class Company_userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_users')->insert([
            'name'                  =>'user',
            'company_name'          =>'company',
            'company_dept'          =>'dept',
            'business_category'     =>'category',
            'tell'                  =>'05000000000',
            'email'         =>'company_user@example.com',
            'adress'          =>'adress',
            'password'      =>Hash::make('12345678'),
            'remember_token'=>Str::random(10),
            'company_id'                  =>1,
        ]);
    }
}
