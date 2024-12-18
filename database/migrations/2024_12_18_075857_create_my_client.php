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
        Schema::create('my_client', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', length: 250)->nullable(false);
            $table->string('slug', length: 100)->nullable(false)->unique();
            $table->enum('is_project', ['0', '1'])->default('0')->nullable(false);
            $table->string('self_capture', length: 1)->default('1')->nullable(false);
            $table->string('client_prefix', length: 4)->nullable(false);
            $table->string('client_logo', length: 255)->default('no-image.jpg')->nullable(false);
            $table->longText('address');
            $table->string('phone_number', length: 50);
            $table->string('city', length: 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_client');
    }
};
