<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\customers;
    
    class Abm extends Controller{
        public function index()
        {
            return view('web.index');
        }

        public function guardarCliente(Request $request)
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

        public function mostrarTabla()
        {
            $cliente=customers::all();
            return view('web.clientes',compact('cliente'));
        }

        public function eliminarPorId($id)
        {
            $cliente=customers::find($id);
            $cliente->delete();
            return view('web.index');
        }

        public function FormModificar($id)
        {
            $cliente=customers::find($id);
            return view('web.modificarCliente',compact('cliente'));
        }

        public function modificarCliente(Request $request,$id)
        {   $cliente=customers::find($id); 
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
    }