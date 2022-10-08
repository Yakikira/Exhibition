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
            'item_name'=>'小型精密モーター',
            'img_url'=>'https://exhibition6604.s3.ap-northeast-1.amazonaws.com/myprefix/machine_dendouki.png',
            'file_url'=>'https://exhibition6604.s3.ap-northeast-1.amazonaws.com/files/drv8830j.pdf',
            'item_head'=>'民生用機器や産業機器などに使われるモーターです',
            'item_body'=>'エンコーダー用途に最適です',
            'company_id'=>1,
            'booth_id'=>1,
            ]);
        DB::table('items')->insert([
            'item_name'=>'スピンドルモーター',
            'img_url'=>'https://exhibition6604.s3.ap-northeast-1.amazonaws.com/myprefix/motor_servo_motor_small_horn.png',
            'file_url'=>'https://exhibition6604.s3.ap-northeast-1.amazonaws.com/files/fa_130ra.pdf',
            'item_head'=>'HDD用モーターです',
            'item_body'=>'静穏性に優れたモーターです',
            'company_id'=>1,
            'booth_id'=>1,
            ]);
        DB::table('items')->insert([
            'item_name'=>'製品3',
            'img_url'=>'https://exhibition6604.s3.ap-northeast-1.amazonaws.com/myprefix/motor_servo_motor_small.png',
            'file_url'=>'https://exhibition6604.s3.ap-northeast-1.amazonaws.com/files/sla7073mprt_ds_jp.pdf',
            'item_head'=>'製品3見出し',
            'item_body'=>'製品3説明文',
            'company_id'=>2,
            'booth_id'=>2,
            ]);
        DB::table('items')->insert([
            'item_name'=>'製品4',
            'img_url'=>'https://exhibition6604.s3.ap-northeast-1.amazonaws.com/myprefix/machine_dendouki.png',
            'file_url'=>'https://exhibition6604.s3.ap-northeast-1.amazonaws.com/files/drv8830j.pdf',           
            'item_head'=>'製品4見出し',
            'item_body'=>'製品4説明文',
            'company_id'=>3,
            'booth_id'=>3,
            ]);
    }
}
