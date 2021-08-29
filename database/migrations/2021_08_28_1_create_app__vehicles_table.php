<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('pgsql-app'))->create('Authentication.vehicles', function (Blueprint $table) {
            $table->id();

            $table->string('VehicleType')
            ->default('Automovil')
            ->comment('Auto por defecto');

            $table->softDeletes();
            $table->timestamps();
        });
    }
//$table->softDeletes(); -----> eliminaciones logicas 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection(env('pgsql-app'))->dropIfExists('vehicles');
    }
}
