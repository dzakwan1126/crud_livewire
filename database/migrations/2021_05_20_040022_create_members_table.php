<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('members', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('phone_number',15);
            $table->date('date_of_birth');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('members');
    }
}
