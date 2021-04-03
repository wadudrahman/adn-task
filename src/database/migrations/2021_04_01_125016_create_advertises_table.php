<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('advertises')) {
            Schema::create('advertises', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->string('start_from')->nullable();
                $table->string('end_at')->nullable();
                $table->float('total_budget', 8, 2)->nullable();
                $table->float('daily_budget', 8, 2)->nullable();
                $table->integer('created_by')->default(0);
                $table->timestamp('created_at')->useCurrent();
                $table->integer('updated_by')->nullable();
                $table->timestamp('updated_at')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertises');
    }
}
