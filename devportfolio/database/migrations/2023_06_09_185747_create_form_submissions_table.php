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
        Schema::create('form_submissions', function (Blueprint $table) {
            $table->id();
            $table->integer('RateAttractiveness');
            $table->integer('RateEasyOfUse');
            $table->integer('RateNavigation');
            $table->integer('RateCleanAndSimple');
            $table->integer('RateUserExperience');
            $table->string('AnythingToAdd')->nullable()->default('');
            $table->string('OpenRemark')->nullable()->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_submissions');
    }
};
