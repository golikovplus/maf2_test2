<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lead', function ($table) {
            $table->string('lead_type')->change();
            $table->string('preferences')->change();
            $table->string('price_range')->change();
            $table->string('home_type')->change();
            $table->string('time_frame')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lead', function ($table) {
            $table->tinyInteger('lead_type')->change();
            $table->tinyInteger('preferences')->change();
            $table->tinyInteger('price_range')->change();
            $table->tinyInteger('home_type')->change();
            $table->tinyInteger('time_frame')->change();
        });
    }
}
