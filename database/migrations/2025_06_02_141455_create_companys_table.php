<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companys', function (Blueprint $table) {
        $table->integer('id',true,);
        $table->string('name','50');
        $table->string('email','40');
        $table->integer('phone')->default('218');
        $table->string('address')->default('tripoli');
        $table->string('city')->default('tripoli');
        $table->string('street')->default('ain zareh');
        $table->string('photo')->default('ayoop');

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Companys');
    }
};
