<?php

use Illuminate\Database\Seeder;

class ExhibitionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exhibitions')->insert([
            'name'   =>'モータ技術展',
            'explain'=>'精密機器から産業機械まで、あらゆる分野・用途に不可欠な“モータ”に関する最新・最適のソリューションが一堂に会する国内唯一の専門技術展。小型・精密~大型の各種モータをはじめ、制御技術、計測・解析技術、材料・素材など、幅広い製品・技術が集結します。'
        ]);
        DB::table('exhibitions')->insert([
            'name'   =>'電源システム展',
            'explain'=>'パワーエレクトロニクス、パワーコンディショナー等による電力変換や、UPS、キャパシタ等による電力安定供給に関する最新技術が一堂に集まる、国内唯一の専門技術展。'
        ]);
    }
}
