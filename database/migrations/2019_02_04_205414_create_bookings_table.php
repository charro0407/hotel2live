<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room');
            $table->string('from');
            $table->string('to');
            $table->integer('nights');
            $table->float('tax');
            $table->float('fee');
            $table->float('subtotal');
            $table->float('total');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('country');
            $table->text('address_1');
            $table->text('address_2');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('name_card');
            $table->text('card');
            $table->string('expire_month');
            $table->string('expire_year');
            $table->string('ccv');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
