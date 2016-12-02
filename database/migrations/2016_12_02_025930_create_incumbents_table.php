<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncumbentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incumbents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('org_id')->unsignable();
            $table->integer('opp_ext_data_id')->unsignable();
            $table->string('incumbent_contract_vehicle')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incumbents');
    }
}
