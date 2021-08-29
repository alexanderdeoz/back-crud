<?php

use  App\Http\Controllers\DriversController;
use  App\Http\Controllers\VehiclesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*

Route::get('drivers/{driver}/cars', function () {
    $drivers = 'venimos todos';
    return response()->json(
        [
            'data' => $drivers,
            'msg' => [
                'sumary' => 'consulta correcta', 
                'detail' => 'la consulta d eproyectos esta correcta',
                'code'=>'201']

        ],200

    );
});   ///  ruta con recurso con funcion anonima 

Route::get('drivers/{driver}/cars/{car}', function () {
    $drivers = 'venimos todos';
    return response()->json(
        [
            'data' => $drivers,
            'msg' => [
                'sumary' => 'consulta correcta', 
                'detail' => 'la consulta d eproyectos esta correcta',
                'code'=>'201']

        ],200

    );
});

Route::post('drivers/{driver}/cars', function () {
    $drivers = 'creado';
    return response()->json(
        [
            'data' => $drivers,
            'msg' => [
                'sumary' => 'Creado correctamente', 
                'detail' => 'la consulta d eproyectos esta correcta',
                'code'=>'201']

        ],200

    );
});


Route::put('drivers/{driver}/cars/{car}', function () {

    return response()->json(
        [
            'data' =>null,
            'msg' => [
                'sumary' => 'consulta correcta', 
                'detail' => 'Actualizado correctamente',
                'code'=>'204']

        ],204

    );
});
Route::delete('drivers/{driver}/cars/{car}', function () {
    $drivers = 'Eliminado';
    return response()->json(
        [
            'data' => $drivers,
            'msg' => [
                'sumary' => 'consulta correcta', 
                'detail' => 'eliminado correctamente',
                'code'=>'201']

        ],201

    );
});

*/
/// rutas Api resourse siempre son creadas conjunto con los controladores 
//controlador en plural 
//comando creacion controlador lleno php artisan make:controller DriversController --api

// Api resurse es un conjunto de rutas con una sola linea de comando 

Route :: apiResource('drivers',DriversController::class);


//primer parametro nombre del recurso
// nombre del controlador

//Agrupamiento de rutas para  una funcionalidad espesifico con un patch


//funcionalidad en especifico 
Route :: prefix('driver')->group(function(){
    Route :: prefix('{driver}')->group(function(){
        Route ::patch('states',[DriversController::class,'updateState']);
    });
    Route :: prefix('')->group(function(){
        Route ::patch('states',[DriversController::class,'updateState']);
    });
});


Route :: apiResource('drivers.vehicles',VehiclesController::class);


Route :: prefix('driver/{driver}/vehicle')->group(function(){
    Route :: prefix('{vehicles}')->group(function(){
        Route ::patch('states',[DriversController::class,'updateState']);
    });
    Route :: prefix('')->group(function(){
        Route ::patch('states',[DriversController::class,'updateState']);
    });
});







