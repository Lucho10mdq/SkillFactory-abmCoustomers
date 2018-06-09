@extends('Temas.cabezera')
@extends('Temas.pie')
@section('content')
</br>
</br>
<form  method="POST" action="{{ url('customers.store')}}" class="form-horizontal">
{{ csrf_field() }}
    
<fieldset>

<!-- Form Name -->
<legend>Alta de Cliente <span class="glyphicon glyphicon-user" aria-hidden="true"></span> </legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre</label>  
  <div class="col-md-4">
  <input id="textinput" name="nombre" placeholder="Nombre" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="apellido">Apellido</label>  
  <div class="col-md-4">
  <input id="apellido" name="apellido" placeholder="Apellido" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dni">Dni</label>  
  <div class="col-md-4">
  <input id="dni" name="dni" placeholder="Dni" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="direccion">Direccion</label>  
  <div class="col-md-4">
  <input id="direccion" name="direccion" placeholder="Direccion" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefono">Telefono</label>  
  <div class="col-md-4">
  <input id="telefono" name="telefono" placeholder="Telefono" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cuil">Cuil</label>  
  <div class="col-md-4">
  <input id="cuil" name="cuil" placeholder="Cuil" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nrocliente">Nro Cliente</label>  
  <div class="col-md-4">
  <input id="nrocliente" name="nroCliente" placeholder="Nro Cliente" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="guardar"></label>
  <div class="col-md-4">
    <button id="guardar" name="guardar" class="btn btn-primary">Guardar</button>
  </div>
</div>
</fieldset>
</form>
@endsection