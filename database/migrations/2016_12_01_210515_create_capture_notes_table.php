<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaptureNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capture_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('opp_cust_data_id')->unsigned()->nullable();
            $table->string('note')->nullable();
            $table->date('note_date')->nullable();
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
        Schema::dropIfExists('capture_notes');
    }
}
