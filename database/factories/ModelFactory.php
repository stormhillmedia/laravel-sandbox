<?php
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
/*
$factory->define(App\Article::class, function (Faker\Generator $faker) {
    static $password;
    return [   
        'title' => $faker->sentence,
        'body' => $faker->sentence,
        'author' => $faker->name,
        'published_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
*/
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\opps::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'ws_name' => $faker->sentence,
        'ws_opp_num' => $faker->randomNumber($nbDigits = 4),
        'is_qualified' => $faker->boolean,
    ];
});
$factory->define(App\opp_cust_datas::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'customer_id' => $faker->randomNumber($nbDigits = 7),
        'custom_name' => $faker->name,
        'opp_category_id' => $faker->randomNumber($nbDigits = 4),
        'date_in_pipeline' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'contract_role' => $faker->word,
        'anticipated_total_contract_value' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10000, $max = 999999),
        'anticipated_workshare' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1000, $max = 99999),
        'anticipated_contract_vehicle' => $faker->sentence,
        'p_bid' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 99),
        'p_win' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 99),
        'data_scope' => $faker->word,
        'author_id' => $faker->randomNumber($nbDigits = 2),
        'priority' => $faker->sentence,
        'userid_of_lock' => $faker->randomNumber($nbDigits = 2),
        'is_inactive' => $faker->boolean,
    ];
});
