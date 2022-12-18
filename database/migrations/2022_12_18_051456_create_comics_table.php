<?php

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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cover_image')->nullable();
            $table->string('genre_tags');
            $table->longText('synopsis');
            $table->longText('description');
            $table->enum('status',['0','1','2','3'])
            ->default('0')
            ->comment('0 = Available, 1 = Borrowed, 2 = Requested, 3 = Unavailable');
            $table->date('date_borrowed')->nullable();
            $table->date('date_returned')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');;
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
        Schema::dropIfExists('comics');
    }
};
