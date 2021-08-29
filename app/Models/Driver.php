<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    //table estiende sentido desde model
    protected $table = 'Authentication.drivers';
    //dentro de atributos son los campos de la  tabla sin fk

    protected $fillable = [
        'description',
        'email',
        'entryDate',
        'lastname',
        'names',

    ];

    //cast especificar un tipo de dato
    // anivel de formato
    protected $casts = [
        'entryDate' => 'datetime:Y-m-d',
    ];
    /*
    protected $attributes = [
        'full_name'
    ];
*/
    //relacion de  1 a  1 
    function vehicle()
    {
        return $this->hasOne(Vehicle::class)->withTimestamps();
    }
    //relacion de  1 a varios
    // nombre de la funcion en plural
    //hasMany


    //relaciond evario a varios
    // nombre de la funcion en plural
    //belongsToMany
    //->withTimestamps();  campos q sea crea en la base para llenar


    //mutadores 

    function setEmailAtribute($value)
    {
        $this->attributes['email'] =  strtoupper($value);
    }

    //accesors
    /*
    function getFullNameAttribute()
    {
        return $this->attributes['names'] . $this->attributes['lastname'];
    }
    */
}
