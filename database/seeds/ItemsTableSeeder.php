<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name'=>'小型精密モーター',
            'img_url'=>'url1',
            'head'=>'民生用機器や産業機器などに使われるモーターです',
            'body'=>'エンコーダー用途に最適です',
            'company_id'=>1,
            'booth_id'=>1,
            ]);
        DB::table('items')->insert([
            'name'=>'スピンドルモーター',
            'img_url'=>'url2',
            'head'=>'HDD用モーターです',
            'body'=>'静穏性に優れたモーターです',
            'company_id'=>1,
            'booth_id'=>1,
            ]);
        DB::table('items')->insert([
            'name'=>'製品3',
            'img_url'=>'url3',
            'head'=>'製品3見出し',
            'body'=>'製品3説明文',
            'company_id'=>2,
            'booth_id'=>2,
            ]);
        DB::table('items')->insert([
            'name'=>'製品4',
            'img_url'=>'url4',
            'head'=>'製品4見出し',
            'body'=>'製品4説明文',
            'company_id'=>3,
            'booth_id'=>3,
            ]);
    }
}
