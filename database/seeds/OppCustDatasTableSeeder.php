<?php

use Illuminate\Database\Seeder;

class OppCustDatasTableSeeder extends Seeder
{
    public function run()
    {
        factory('App\opp_cust_datas',10);
    }
}
