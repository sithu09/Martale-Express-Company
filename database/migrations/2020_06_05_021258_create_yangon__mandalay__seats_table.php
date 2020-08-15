<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYangonMandalaySeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yangon__mandalay__seats', function (Blueprint $table) {
            $table->id();
            $table->string('A01');
            $table->string('A02');
            $table->string('A03');
            $table->string('A04');
            $table->string('A05');
            $table->string('A06');
            $table->string('A07');
            $table->string('A08');
            $table->string('A09');
            $table->string('A10');
            $table->string('A11');
            $table->string('A12');
            $table->string('B01');
            $table->string('B02');
            $table->string('B03');
            $table->string('B04');
            $table->string('B05');
            $table->string('B06');
            $table->string('B07');
            $table->string('B08');
            $table->string('B09');
            $table->string('B10');
            $table->string('B11');
            $table->string('B12');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yangon__mandalay__seats');
    }
}
