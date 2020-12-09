<h1 class="page-header">
    Nuevo 
</h1>

<ol class="breadcrumb">
  <li><a href="?c=buses">Rutas</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-ruta" action="?c=ruta&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Id de ruta </label>
      <input type="text" name="id_ruta" value="<?php echo $rut->id_ruta; ?>" class="form-control" placeholder="Ingrese el id de la ruta." data-validacion-tipo="requerido|min:20" required />
    </div>

    <div class="form-group">
        <label>Nombre de la ruta</label>
        <input type="text" name="nombre_ruta" value="<?php echo $rut->nombre_ruta; ?>" class="form-control" placeholder="Ingrese el nombre de la ruta." data-validacion-tipo="requerido|min:100" required/>
    </div>

    <hr />

    
    <div class="text-right">
     <button class="btn btn-primary">Guardar</button>
     <a href="index.php?c=ruta" class="btn btn-danger">Volver</a>
    </div>
</form>