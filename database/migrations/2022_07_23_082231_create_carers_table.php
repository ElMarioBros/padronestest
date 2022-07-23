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
        Schema::create('carers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('curp')->nullable();
            $table->string('rfc')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('n_contacto')->nullable();
            $table->string('tipo_sangre')->nullable();
            $table->string('carer_type')->nullable();
            $table->string('work_experience')->nullable();
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
        Schema::dropIfExists('carers');
    }
};
