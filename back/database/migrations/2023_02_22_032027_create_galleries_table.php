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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id');
            $table->index('group_id','galleries_groups_idx');
            $table->foreign('group_id','galleries_groups_fk')
                ->on('groups')
                ->references('id')
                ->cascadeOnDelete();
            $table->string('image',200);
            $table->string('video',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
