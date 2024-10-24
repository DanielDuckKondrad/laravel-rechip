<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('telegram_regions', function (Blueprint $table) {
            $table->id();
            $table->string('region_code', 10);
            $table->string('telegram_account', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('telegram_regions');
    }
};
