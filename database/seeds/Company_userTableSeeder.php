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
            'cu_name'                  =>'CU1',
            'company_name'          =>'company1',
            'company_dept'          =>'dept1',
            'business_category'     =>'category1',
            'tell'                  =>'05000000000',
            'email'         =>'company_user1@example.com',
            'adress'          =>'adress1',
            'password'      =>Hash::make('12345678'),
            'remember_token'=>Str::random(10),
            'company_id'                  =>1,
        ]);
        DB::table('company_users')->insert([
            'cu_name'                  =>'company_user2',
            'company_name'          =>'company2',
            'company_dept'          =>'dept2',
            'business_category'     =>'category2',
            'tell'                  =>'05000000000',
            'email'         =>'company_user2@example.com',
            'adress'          =>'adress2',
            'password'      =>Hash::make('12345678'),
            'remember_token'=>Str::random(10),
            'company_id'                  =>2,
        ]);
        DB::table('company_users')->insert([
            'cu_name'                  =>'company_user3',
            'company_name'          =>'company3',
            'company_dept'          =>'dept3',
            'business_category'     =>'category3',
            'tell'                  =>'05000000000',
            'email'         =>'company_user3@example.com',
            'adress'          =>'adress3',
            'password'      =>Hash::make('12345678'),
            'remember_token'=>Str::random(10),
            'company_id'                  =>3,
        ]);
    }
}
