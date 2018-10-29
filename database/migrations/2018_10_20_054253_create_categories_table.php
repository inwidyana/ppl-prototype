<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');

            /*
             *  Integer indicate how the user budget:
             *  1: Daily
             *  2: Weekly
             *  3: Monthly
             *  4: Yearly
             */
            $table->integer('budget_by')->nullable();
            /*
             *  The ammount of money that the user allocated for the given timeframe specified by budgetBy..
             */
            $table->string('ammount_by_specified')->nullable();
            $table->integer('user_id');

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
