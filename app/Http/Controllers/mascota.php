<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\mascotas;
class mascota extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function todos(Request $request){
        return ($request->all()); 
    }
    public function index()
    {
      $mascotas = mascotas::all();
        return view('administrador/registromascota',['mascotas' => $mascotas->toArray()]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $mascotas = new mascotas;
        $mascotas = \DB::table('mascotas')->insert([
                'nombre' => $request->nombre,
                'edad' => $request->edad,
                'tipo' => $request->tipo,
                'color' => $request->color,
                'created_at'=>DATE('Y-m-d H:i:s'),
                'updated_at'=>DATE('Y-m-d H:i:s')
            ]);
        return redirect('/administrador/panel')->with('mensaje', true); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {   //dd($id);
        $mascotas = mascotas::find($id);
            if (!is_null($mascotas))
                //dd($mascotas);
                return view('administrador/detallemascota', ['mascotas' => $mascotas->toArray()]);
            else
                return response('no encontrado', 404);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
