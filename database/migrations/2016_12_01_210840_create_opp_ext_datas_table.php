<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOppExtDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opp_ext_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('opp_id')->unsigned()->nullable();
            $table->integer('ext_source_id')->unsigned()->nullable();
            $table->string('link')->nullable();
            $table->string('opp_name')->nullable();
            $table->string('opp_ref_num')->nullable();
            $table->string('opp_summary')->nullable();
            $table->integer('org_id_of_opp_customer')->unsigned()->nullable();
            $table->date('rfp_date')->nullable();
            $table->string('phase')->nullable();
            $table->date('award_date')->nullable();
            $table->date('last_revised')->nullable();
            $table->string('data_scope')->nullable();
            $table->integer('customer_id')->unsigned()->nullable();
            $table->integer('userid_of_lock')->unsigned()->nullable();
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
        Schema::dropIfExists('opp_ext_datas');
    }
}
