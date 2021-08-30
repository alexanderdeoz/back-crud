<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$drivers = DB::select('select * from drivers'); consulta SQl
        // // $drivers   = DB::table('drivers')->get();consulta query builder
        $drivers =  Driver::get(); //ELOQUEN  ->TRABAJA CON MODELOS
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
        $driver = new Driver();
        $driver->description = $request->description;
        $driver->email = $request->email;
        $driver->entryDate = $request->entryDate;
        $driver->lastname = $request->lastname;
        $driver->names = $request->names;
        $driver->save();
        return response()->json(
            [
                'data' => $driver,
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
    public function show(Driver $driver)
    {
        // $driver = DB::select('select * from drivers WHERE id=?',[$id]);
        // $drivers  = DB::table('drivers')->where('id','=',$driver)->first();


        //$driver = Driver::find($driver);


        return response()->json(
            [
                'data' => $driver,
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
    public function update(Request $request,Driver $driver)
    {
        $driver = Driver::find($driver);
        $driver->description = $request->description;
        $driver->email = $request->email;
        $driver->entryDate = $request->entryDate;
        $driver->lastname = $request->lastname;
        $driver->names = $request->names;
        $driver->save();
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
    public function destroy(Driver $driver)
    {
      //  $driver=Driver::find($driver);
        $driver ->delete();
        return response()->json(
            [
                'data' => $driver,
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
