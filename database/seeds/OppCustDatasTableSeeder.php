<?php

use Illuminate\Database\Seeder;

class OppCustDatasTableSeeder extends Seeder
{
    public function run()
    {
    	$oppid = 123;
        factory('App\opp_cust_datas',10)->create(['opps_id' => $oppid]);
       // create(['opps_id' => $user->id]);
    }
}
