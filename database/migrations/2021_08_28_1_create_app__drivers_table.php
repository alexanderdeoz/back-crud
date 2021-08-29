<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    
    // up es para crear
    public function up()
    {
       
        Schema::connection(env('pgsql-app'))->create('Authentication.drivers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('vehicle_id')
            ->default(123);
            //->constrained('vehicles');
           //->constrained('Authentication.vehicles');

            $table->text('description')
            ->nullable()
            ->comment('como se describe el conductor');

            $table->string('email')
            ->comment('email personal');

            $table->date('entryDate')
            ->comment('fecha de ingreso');

            $table->string('lastname')
            ->comment('dos apellidos');

            $table->string('names')
            ->comment('dos nombres');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //down e spara eliminar por el comando  :fresh
    public function down()
    {
        Schema::connection(env('pgsql-app'))->dropIfExists('drivers');
    }
}
