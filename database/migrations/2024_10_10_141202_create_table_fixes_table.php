<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_fixes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('index');
            $table->string('fix_index');
            $table->unsignedInteger('type');
            $table->string('fix_first');
            $table->string('fix_last');
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
        Schema::dropIfExists('tabel_fixes');
    }
}
