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
            'title'=>'小型精密モーター',
            'head'=>'民生用機器や産業機器などに使われるモーターです',
            'company_id'=>1,
            'exhibition_id'=>1,
            ]);
        DB::table('booths')->insert([
            'title'=>'スピンドルモーター',
            'head'=>'民生用機器や産業機器などに使われるモーターです',
            'company_id'=>2,
            'exhibition_id'=>1,
            ]);
        DB::table('booths')->insert([
            'title'=>'ブース3',
            'head'=>'ブース3の見出し',
            'company_id'=>1,
            'exhibition_id'=>2,
            ]);
        DB::table('booths')->insert([
            'title'=>'ブース4',
            'head'=>'ブース4の見出し',
            'company_id'=>3,
            'exhibition_id'=>2,
            ]);
    }
}
