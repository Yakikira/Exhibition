<?php

use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('histories')->insert([
            'user_id'   =>1,
            'item_id'=>1
        ]);
        DB::table('histories')->insert([
            'user_id'   =>1,
            'item_id'=>1
        ]);
    }
}
