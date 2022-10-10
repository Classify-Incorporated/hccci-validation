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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('document_series_no');
            $table->string('control_number');
            $table->string('department_code');
            $table->string('revision_number');
            $table->string('series_number');
            $table->string('number_pages');
            $table->string('number_copies');
            $table->string('document_type');
            $table->date('document_dated');
            $table->string('prepared_by');
            $table->string('approved_by');
            $table->string('to');
            $table->string('from');
            $table->string('department');
            $table->string('status');
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
        Schema::dropIfExists('documents');
    }
};
