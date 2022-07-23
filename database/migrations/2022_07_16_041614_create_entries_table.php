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
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->string('n_id')->nullable();
            $table->string('name')->nullable();
            $table->string('sindicato')->nullable();
            $table->string('federacion')->nullable();
            $table->string('confederacion')->nullable();
            $table->string('empleo')->nullable();
            $table->string('n_contacto')->nullable();
            $table->string('n_contacto_2')->nullable();
            $table->string('n_contacto_3')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('beneficiarios')->nullable();
            $table->string('email')->nullable();
            $table->string('curp')->nullable();
            $table->string('rfc')->nullable();
            $table->string('tipo_sangre')->nullable();
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
        Schema::dropIfExists('entries');
    }
};
