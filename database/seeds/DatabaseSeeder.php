<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	protected $toTruncate = [
		'users',
		'opp_cust_datas',
		'articles'
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
        $this->call(ArticleTableSeeder::class);
        //$this->call(OppCustDatasTableSeeder::class);
    }
} 
