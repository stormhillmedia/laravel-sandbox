<?php

use Illuminate\Database\Seeder;

class OppsTableSeeder extends Seeder
{
    public function run()
    {
        factory('App\opps',10)->create()->each(function ($opp)  {
        	$oppid = $opp->ws_opp_num;
        	factory('App\opp_cust_datas',3)->create(['opps_id' => $oppid]);
        });


    }
} 
