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
        Schema::create('coition_partner', function (Blueprint $table) {
            $table->foreignIdFor(Coition::class)->constrained();
            $table->foreignIdFor(Partner::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coition_partner');
    }
};
