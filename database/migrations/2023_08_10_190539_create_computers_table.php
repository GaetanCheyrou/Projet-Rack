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
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_laptop');
            $table->string('brand');
            $table->string('os'); /*Enum*/
            $table->string('processor')/*Enum*/;
            $table->smallInteger('ram');
            $table->smallInteger('storage');
            $table->boolean('graphic_card');
            $table->tinyInteger('usb_ports');
            $table->boolean('cd_player');
            $table->boolean('sd_card_reader');
            $table->text('options')->nullable();
            $table->string('url_image')->nullable();
            $table->boolean('spotlight');
            $table->foreignId('member_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};
