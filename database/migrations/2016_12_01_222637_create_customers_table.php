<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('abbrev_name')->nullable();
            $table->string('encode_key')->nullable();
            $table->integer('org_id')->unsigned()->nullable();
            $table->decimal('rev_3_year_avg',14,2)->nullable();
            $table->integer('num_employees')->unsigned()->nullable();
            $table->date('date_updated')->nullable();
            $table->integer('naics_code_id')->unsigned()->nullable();
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
        Schema::dropIfExists('customers');
    }
}
