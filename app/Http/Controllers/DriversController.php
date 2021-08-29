<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = 'venimos todos';
        return response()->json(
            [
                'data' => $drivers,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'la consulta d eproyectos esta correcta',
                    'code' => '201'
                ]

            ],
            200

        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $drivers = 'creado';
        return response()->json(
            [
                'data' => $drivers,
                'msg' => [
                    'sumary' => 'Creado correctamente',
                    'detail' => 'la consulta d eproyectos esta correcta',
                    'code' => '201'
                ]

            ],
            200

        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drivers = 'venimos todos';
        return response()->json(
            [
                'data' => $drivers,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'la consulta d eproyectos esta correcta',
                    'code' => '201'
                ]

            ],
            200

        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'Actualizado correctamente',
                    'code' => '204'
                ]

            ],
            204

        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drivers = 'Eliminado';
        return response()->json(
            [
                'data' => $drivers,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'eliminado correctamente',
                    'code' => '201'
                ]

            ],
            201

        );
    }


    public function updateState()
    {
        $drivers = 'Actualizado el estado';
        return response()->json(
            [
                'data' => $drivers,
                'msg' => [
                    'sumary' => 'actualizacion correcta correcta',
                    'detail' => 'eliminado correctamente',
                    'code' => '201'
                ]

            ],
            201

        );
    }
}
