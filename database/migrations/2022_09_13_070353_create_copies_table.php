<?php

use App\Models\Copy;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copies', function (Blueprint $table) {
            $table->id('copy_id');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('book_id')->references('book_id')->on('books');
            //ki van adva: 1, selejtve ítélve: 2, alapból 0
            $table->integer('status')->default(0);
            $table->timestamps();
        });

        Copy::create(['user_id' => 1, 'book_id' => 2, 'status'=>1]);
        Copy::create(['user_id' => 2, 'book_id' => 1, 'status'=>2]);
        Copy::create(['user_id' => 2, 'book_id' => 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('copies');
    }
};
