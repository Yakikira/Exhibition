<?php

use Illuminate\Database\Seeder;

class BoothsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('booths')->insert([
            'booth_title'=>'小型精密モーター',
            'booth_head'=>'民生用機器や産業機器などに使われるモーターです',
            'company_id'=>1,
            'exhibition_id'=>1,
            ]);
        DB::table('booths')->insert([
            'booth_title'=>'スピンドルモーター',
            'booth_head'=>'民生用機器や産業機器などに使われるモーターです',
            'company_id'=>2,
            'exhibition_id'=>1,
            ]);
        DB::table('booths')->insert([
            'booth_title'=>'ブース3',
            'booth_head'=>'ブース3の見出し',
            'company_id'=>1,
            'exhibition_id'=>2,
            ]);
        DB::table('booths')->insert([
            'booth_title'=>'ブース4',
            'booth_head'=>'ブース4の見出し',
            'company_id'=>3,
            'exhibition_id'=>2,
            ]);
    }
}
