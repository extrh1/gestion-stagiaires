<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('pays');

            $table->integer('annee')->unsigned()->default(date('Y'));
            $table->time('duree');
            $table->string('genre');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
