<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    //table estiende sentido desde model
    protected $table = 'Authentication.vehicles';
    //dentro de atributos son los campos de la  tabla sin fk
    //el id no se incluye en los campos pk
    protected $fillable = [
        'VehicleType',
    ];

    //un driver tiene un vehicle
    //belongsto   da sentido de pertenencia un vehiculo pertenece a un conductor 
    //relacion de  1 a  1     
    function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    // relacion varios a varios
    //belongsToMany
}
