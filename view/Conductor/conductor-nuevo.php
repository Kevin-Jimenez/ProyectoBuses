<h1 class="page-header">
    Nuevo 
</h1>

<ol class="breadcrumb">
  <li><a href="?c=conductor">Conductores</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-conductor" action="?c=conductor&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>Documento</label>
        <input type="text" name="documento" value="<?php echo $con->documento; ?>" class="form-control" placeholder="Ingrese el documento del conductor." data-validacion-tipo="requerido|min:100" required/>
    </div>

    <div class="form-group">
        <label>Nombre conductor</label>
        <input type="text" name="nombre_conductor" value="<?php echo $con->nombre_conductor; ?>" class="form-control" placeholder="Ingrese el nombre del conductor." data-validacion-tipo="requerido|min:100" required/>
    </div>

    <div class="form-group">
        <label>Apellido conductor</label>
        <input type="text" name="apellido_conductor" value="<?php echo $con->apellido_conductor; ?>" class="form-control" placeholder="Ingrese el apellido del conductor." data-validacion-tipo="requerido|min:10" required/>
    </div>

     <div class="form-group">
        <label>Telefono conductor</label>
        <input type="text" name="telefono_conductor" value="<?php echo $con->telefono_conductor; ?>" class="form-control" placeholder="Ingrese el telefono del conductor." data-validacion-tipo="requerido|min:10" required/>
    </div>

    <hr />

    
    <div class="text-right">
     <button class="btn btn-primary">Guardar</button>
     <a href="index.php?c=conductor" class="btn btn-danger">Volver</a>
    </div>
</form>