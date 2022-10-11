<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->nullable()->default(0);
            $table->integer('level')->default(0);
            $table->string('name');
            $table->integer('order_level')->default(0);
            $table->double('commision_rate', 8, 2)->default(0);
            $table->string('banner')->nullable();
            $table->string('icon')->nullable();
            $table->integer('featured')->default(0);
            $table->string('slug')->nullable()->index('slug');
            $table->text('description')->nullable();
            $table->integer('status')->default(1)->comment('Active=1, Inactive=0');
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
        Schema::dropIfExists('categories');
    }
}
