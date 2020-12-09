<h1 class="page-header">
    <?php echo $rut->id_ruta != null ? $rut->nombre_ruta : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=ruta">Rutas</a></li>
  <li class="active"><?php echo $rut->id_ruta != null ? $rut->nombre_ruta : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-buses" action="?c=ruta&a=Editar"method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_ruta" value="<?php echo $rut->id_ruta; ?>" />


    <div class="form-group">
        <label>Nombre de ruta </label>
        <input type="text" name="nombre_ruta" value="<?php echo $rut->nombre_ruta; ?>" class="form-control" placeholder="Ingrese el nombre de la ruta." required data-validacion-tipo="requerido|min:10" />
    </div>

    <hr />

    
    <div class="text-right">
     <button class="btn btn-primary">Guardar</button>
     <a href="index.php?c=ruta" class="btn btn-danger">Volver</a>
    </div>
</form>