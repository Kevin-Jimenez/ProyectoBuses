<h1 class="page-header">
    <?php echo $bus->placa != null ? $bus->nombre_conductor : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">Bus</a></li>
  <li class="active"><?php echo $bus->placa != null ? $bus->documento : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-buses" action="?c=buses&a=Editar"method="post" enctype="multipart/form-data">
    <input type="hidden" name="placa" value="<?php echo $bus->placa; ?>" />

    <div class="form-group">
        <label>Documento</label>
        <input type="text" name="documento" value="<?php echo $bus->documento; ?>" class="form-control" placeholder="Ingrese el documento del conductor." required data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Nombre conductor</label>
        <input type="text" name="nombre_conductor" value="<?php echo $bus->nombre_conductor; ?>" class="form-control" placeholder="Ingrese el nombre del conductor." required data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Apellido conductor</label>
        <input type="text" name="apellido_conductor" value="<?php echo $bus->apellido_conductor; ?>" class="form-control" placeholder="Ingrese el apellido del conductor." required data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Id ruta</label>
        <input type="text" name="id_ruta" value="<?php echo $bus->id_ruta; ?>" class="form-control" placeholder="Ingrese id de la ruta." required data-validacion-tipo="requerido|min:10" />
    </div>

    <hr />

    
    <div class="text-right">
     <button class="btn btn-primary">Guardar</button>
     <a href="index.php?c=buses" class="btn btn-danger">Volver</a>
    </div>
</form>

