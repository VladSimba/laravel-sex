<?php

use App\Models\Coition;
use App\Models\Partner;
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
        Schema::create('orgasms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Partner::class)->constrained();
            $table->foreignIdFor(Coition::class)->constrained();
            $table->integer('count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orgasms');
    }
};
