<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('location_id')->unsigned()->nullable();
            $table->string('department')->nullable();
            $table->string('agency_div')->nullable();
            $table->integer('business_type_id')->unsigned()->nullable();
            $table->string('notes')->nullable();
            $table->integer('org_id_of_parent_org')->unsigned()->nullable();
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
        Schema::dropIfExists('organizations');
    }
}
