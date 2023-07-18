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
        Schema::create('item_list_names', function (Blueprint $table) {
            $table->id();
            $table->foreignId("item_id")->constrained("items")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("listname_id")->constrained("list_names")->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedInteger("pieces");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_list_names');
    }
};
