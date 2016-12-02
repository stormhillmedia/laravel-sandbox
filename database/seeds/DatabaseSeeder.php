<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	protected $toTruncate = [
		'users',
		'opps',
		'opp_cust_datas'
	];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	foreach ( $this->toTruncate as $table) {
    		DB::table($table)->truncate();
    	}
    
        $this->call(UsersTableSeeder::class);
        $this->call(OppsTableSeeder::class);
       // $this->call(OppCustDatasTableSeeder::class);
    }
} 
