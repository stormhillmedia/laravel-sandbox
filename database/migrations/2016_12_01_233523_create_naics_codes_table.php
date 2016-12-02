<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNaicsCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naics_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naics_code')->nullable();
            $table->string('naics_description')->nullable();
            $table->decimal('rev_standard',14,2)->nullable();
            $table->integer('emp_standard')->nullable();
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
        Schema::dropIfExists('naics_codes');
    }
}
