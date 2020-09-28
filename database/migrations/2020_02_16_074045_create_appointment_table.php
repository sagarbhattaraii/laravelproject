<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("pname")->unique();
            $table->string("pemail");
            $table->string("paddress");
            $table->string("pcellno")->unique();
            $table->enum("pgender",['male','female']);
            $table->date("adate");
            $table->time("atime");
            $table->string("description")->nullable();
            $table->integer("status");
            $table->unsignedBigInteger("doctor_id");
            $table->foreign("doctor_id")->references("id")->on("doctors");
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
        Schema::dropIfExists('appointment');
    }
}
