<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial_number')->nullable()->unique();
            $table->string('name')->nullable();
            $table->longText('notes')->nullable();
            $table->string('donor')->nullable();
            $table->string('model')->nullable();
            $table->string('supplier')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
