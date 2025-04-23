<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\password;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('users',
       function(Blueprint $table){


        $table->integer('id',true,);
        $table->string('name','50');
        $table->string('email','20');
        $table->integer('phone');
        $table->string('address');
        $table->string('password','15');
        $table->string('photo');
       }

       );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
