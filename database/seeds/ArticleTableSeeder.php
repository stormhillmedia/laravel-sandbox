<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    public function run()
    {
        factory('App\Article',10);
    }
}
