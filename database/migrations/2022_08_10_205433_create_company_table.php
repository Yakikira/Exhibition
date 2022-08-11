<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function(Blueprint $table){
            $table->bigIncrements('company_id');
            $table->string('company_name');
            $table->string('company_adress');
            $table->timestamps();
            $table->timestamp('delete_at')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
