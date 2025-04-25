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
        $table->string('email','29');
        $table->integer('phone')->default('218');
        $table->string('address')->default('tripoli');
        $table->string('password','100');
        $table->string('photo')->default('jjjjj');
        $table->timestamps();
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
