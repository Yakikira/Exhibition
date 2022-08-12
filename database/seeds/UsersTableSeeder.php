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
            'name'                  =>'user',
            'company_name'          =>'company',
            'company_dept'          =>'dept',
            'business_category'     =>'category',
            'tell'                  =>'05000000000',
            'email'         =>'user@example.com',
            'adress'          =>'adress',
            'password'      =>Hash::make('12345678'),
            'remember_token'=>Str::random(10),
            ]);
    }
}
