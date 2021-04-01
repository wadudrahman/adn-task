<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreativeUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('creative_uploads')) {
            Schema::create('creative_uploads', function (Blueprint $table) {
                $table->id();
                $table->string('path')->nullable();
                $table->integer('advertise_id')->nullable();
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
        Schema::dropIfExists('creative_uploads');
    }
}
