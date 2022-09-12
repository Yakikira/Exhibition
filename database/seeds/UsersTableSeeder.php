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
            'user_name'                  =>'user1',
            'company_name'          =>'company1',
            'company_dept'          =>'dept1',
            'business_category'     =>'category1',
            'tell'                  =>'05000000000',
            'email'         =>'user1@example.com',
            'adress'          =>'adress1',
            'password'      =>Hash::make('12345678'),
            'remember_token'=>Str::random(10),
            ]);
        DB::table('users')->insert([
            'user_name'                  =>'user2',
            'company_name'          =>'company2',
            'company_dept'          =>'dept2',
            'business_category'     =>'category2',
            'tell'                  =>'05000000000',
            'email'         =>'user2@example.com',
            'adress'          =>'adress2',
            'password'      =>Hash::make('12345678'),
            'remember_token'=>Str::random(10),
            ]);
}
}
