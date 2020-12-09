<h1 class="page-header">
    <?php echo $con->documento != null ? $con->documento: 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=condutor">Conductor</a></li>
  <li class="active"><?php echo $con->documento != null ? $con->nombre_conductor  : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-buses" action="?c=conductor&a=Editar"method="post" enctype="multipart/form-data">
    <input type="hidden" name="documento" value="<?php echo $con->documento; ?>" />

    <div class="form-group">
        <label>Nombre conductor</label>
        <input type="text" name="nombre_conductor" value="<?php echo $con->nombre_conductor; ?>" class="form-control" placeholder="Ingrese el nombre del conductor." required data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Apellido conductor</label>
        <input type="text" name="apellido_conductor" value="<?php echo $con->apellido_conductor; ?>" class="form-control" placeholder="Ingrese el apellido del conductor." required data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Telefono conductor</label>
        <input type="text" name="telefono_conductor" value="<?php echo $con->telefono_conductor; ?>" class="form-control" placeholder="Ingrese el telefono del conductor." required data-validacion-tipo="requerido|min:10" />
    </div>

    <hr />

    
    <div class="text-right">
     <button class="btn btn-primary">Guardar</button>
     <a href="index.php?c=conductor" class="btn btn-danger">Volver</a>
    </div>
</form>