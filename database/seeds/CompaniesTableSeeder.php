<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'company_name'              =>'株式会社1',
            'company_adress'              =>'株式会社1の住所',
            ]);
        DB::table('companies')->insert([
            'company_name'              =>'株式会社2',
            'company_adress'              =>'株式会社2の住所',
            ]);
        DB::table('companies')->insert([
            'company_name'              =>'株式会社3',
            'company_adress'              =>'株式会社3の住所',
            ]);
            
    }
}
