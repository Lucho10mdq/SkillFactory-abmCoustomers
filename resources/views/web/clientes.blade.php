@extends('Temas.cabezera')
@extends('Temas.pie')
@section('content')

<h1 align="center">Listado de Clientes</h1>
</br>
<table class="table table-striped">
  
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Dni</td>
            <td>Direccion</td>
            <td>Telefono</td>
            <td>Cuil</td>
            <td>Nro Cliente</td>
            <td>Acciones</td>
        </tr>

        @foreach($cliente as $clientes)
            <tr>
                <td>{{$clientes->nombre}}</td>
                <td>{{$clientes->apellido}}</td>
                <td>{{$clientes->dni}}</td>
                <td>{{$clientes->direccion}}</td>
                <td>{{$clientes->telefono}}</td>
                <td>{{$clientes->cuil}}</td>
                <td>{{$clientes->nroCliente}}</td>
                <td> <a href="/eliminar/{{$clientes->id}}" class="btn btn-primary">Eliminar</td>
                <td> <a href="/modificarCliente/{{$clientes->id}}" class="btn btn-primary">Modificar</td>
            </tr>
        @endforeach    
   
</table>
@endsection