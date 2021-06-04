<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receiveitems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('offer_id')
            ->nullable()->constrained('offers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('sender_id')
            ->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('receiver_id')
            ->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('receiveitems');
    }
}
