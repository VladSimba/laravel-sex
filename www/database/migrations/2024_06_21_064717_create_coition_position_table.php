<?php

use App\Models\Coition;
use App\Models\Position;
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
        Schema::create('coition_position', function (Blueprint $table) {
            $table->foreignIdFor(Coition::class)->constrained();
            $table->foreignIdFor(Position::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coition_position');
    }
};
