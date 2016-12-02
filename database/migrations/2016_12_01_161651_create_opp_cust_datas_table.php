<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOppCustDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opp_cust_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('opps_id')->unsigned()->nullable();
            $table->integer('customer_id')->unsigned()->nullable();
            $table->string('custom_name');
            $table->integer('opp_category_id')->unsigned()->nullable();
            $table->date('date_in_pipeline')->nullable();
            $table->string('contract_role')->nullable();
            $table->integer('anticipated_total_contract_value')->nullable();
            $table->decimal('anticipated_workshare',14,2)->nullable();
            $table->string('anticipated_contract_vehicle')->nullable();
            $table->decimal('p_bid',4,2)->default(0)->nullable();
            $table->decimal('p_win',4,2)->default(0)->nullable();
            $table->string('data_scope')->nullable();
            $table->integer('author_id')->unsigned()->nullable()->nullable();
            $table->string('priority')->default('normal')->nullable();
            $table->integer('userid_of_lock')->nullable()->nullable();
            $table->boolean('is_inactive')->default(false);
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
        Schema::dropIfExists('opp_cust_datas');
    }
}
