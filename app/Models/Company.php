<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function up()
    {
        Schema::create('admins', fuction(Blueprint $table){
            $table->bigIncrements('company_id');
            $table->string('company_name');
            $table->string('company_adress');
            $table->timestamps();
            $table->timestamp('delete_at')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
