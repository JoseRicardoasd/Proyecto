<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\añadirLibro;

class añadirLibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = añadirLibro::all();
        return view ('/añadirLibro',compact('alumnos'));

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
        $añadirLibro = new añadirLibro;

        $añadirLibro ->autor = $request->input('autor');
        $añadirLibro  ->ombre = $request->input('nombre');
        $añadirLibro  ->editorial= $request->input('editorial');
        $añadirLibro  ->lugarPublicacion = $request->input('lugarPublicacion');
        $añadirLibro  ->añoPublicacion = $request->input('añoPublicacion');

        $añadirLibro->save();
        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $libro = añadirLibro::find($id);
        return view ('show',compact('libro'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(añadirLibro $id)
    {
        return view ('editar',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $libro = añadirLibro::findOrFail($id);
        $libro ->autor = $request->input('autor');
        $libro  ->ombre = $request->input('nombre');
        $libro  ->editorial= $request->input('editorial');
        $libro  ->lugarPublicacion = $request->input('lugarPublicacion');
        $libro  ->añoPublicacion = $request->input('añoPublicacion');
        $libro->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro = añadirLibro::find($id);
        $libro->delete();
        return back()->with('succes','Libro eliminado correctamente');
    }
}
