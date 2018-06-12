<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customers;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente=customers::all();
        return view('web.clientes',compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente=new customers;
        $cliente->nombre=$request->input('nombre');
        $cliente->apellido=$request->input('apellido');
        $cliente->dni=$request->input('dni');
        $cliente->direccion=$request->input('direccion');
        $cliente->telefono=$request->input('telefono');
        $cliente->cuil=$request->input('cuil');
        $cliente->nroCliente=$request->input('nroCliente');
        
        $cliente->save();
        return view('web.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=customers::find($id);
        return view('web.modificarCliente',compact('cliente'));
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
        $cliente=customers::find($id); 
        $cliente->nombre=$request->input('nombre');
        $cliente->apellido=$request->input('apellido');
        $cliente->dni=$request->input('dni');
        $cliente->direccion=$request->input('direccion');
        $cliente->telefono=$request->input('telefono');
        $cliente->cuil=$request->input('cuil');
        $cliente->nroCliente=$request->input('nroCliente');
        $cliente->save();
        return view('web.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $cliente=customers::find($id);
        $cliente->delete();
        return redirect('/customers/create');
    }

    public function jsonA()
    {
        $cliente=new customers;
        $cliente=customers::all();
        return response()->json($cliente);
    }

    public function jsonPorId($id)
    {
        $cliente=customers::find($id);
        return response()->json($cliente);
    }
}


