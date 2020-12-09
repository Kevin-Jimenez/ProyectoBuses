<h1 class="page-header">
    Nuevo 
</h1>

<ol class="breadcrumb">
  <li><a href="?c=buses">Buses</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-buses" action="?c=buses&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Placa</label>
      <input type="text" name="placa" value="<?php echo $bus->placa; ?>" class="form-control" placeholder="Ingrese la placa del vehiculo." data-validacion-tipo="requerido|min:20" required />
    </div>

    <div class="form-group">
        <label>Documento</label>
        <input type="text" name="documento" value="<?php echo $bus->documento; ?>" class="form-control" placeholder="Ingrese el documento del conductor." data-validacion-tipo="requerido|min:100" required/>
    </div>

    <div class="form-group">
        <label>Nombre conductor</label>
        <input type="text" name="nombre_conductor" value="<?php echo $bus->nombre_conductor; ?>" class="form-control" placeholder="Ingrese el nombre del conductor." data-validacion-tipo="requerido|min:100" required/>
    </div>

    <div class="form-group">
        <label>Apellido conductor</label>
        <input type="text" name="apellido_conductor" value="<?php echo $bus->apellido_conductor; ?>" class="form-control" placeholder="Ingrese el apellido del conductor." data-validacion-tipo="requerido|min:10" required/>
    </div>

     <div class="form-group">
        <label>Id ruta</label>
        <input type="text" name="id_ruta" value="<?php echo $bus->id_ruta; ?>" class="form-control" placeholder="Ingrese el id de ruta." data-validacion-tipo="requerido|min:10" required/>
    </div>

    <hr />

    
    <div class="text-right">
     <button class="btn btn-primary">Guardar</button>
     <a href="index.php?c=buses" class="btn btn-danger">Volver</a>
    </div>
</form>
