<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('opp_cust_data_id')->unsigned()->nullable();
            $table->string('action')->nullable();
            $table->date('due_date')->nullable();
            $table->integer('person_id_of_assigned_to')->unsigned()->nullable();
            $table->integer('person_id_of_owner')->unsigned()->nullable();
            $table->string('status')->nullable();
            $table->integer('gate_review_id')->unsigned()->nullable();
            $table->boolean('is_hidden')->default(false);
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
        Schema::dropIfExists('actions');
    }
}
