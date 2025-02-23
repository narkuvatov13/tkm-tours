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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->index('user_id');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->text('tour_img');
            $table->string('tour_location_title');
            $table->string('tour_location_url');
            $table->string('tour_title');
            $table->string('tour_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('tours');
        Schema::dropForeign('tours_user_id_foreign');
        Schema::dropIndex('tours_user_id_index');
        Schema::dropColumn('user_id');
    }
};
