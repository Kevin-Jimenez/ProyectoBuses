<h1 class="page-header">
    <?php echo $cont->id_contrato != null ? $cont->nombre_conductor : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=contrato">cont</a></li>
  <li class="active"><?php echo $cont->id_contrato != null ? $cont->documento : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-buses" action="?c=contrato&a=Editar"method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_contrato" value="<?php echo $cont->id_contrato; ?>" />

    <div class="form-group">
        <label>Documento</label>
        <input type="text" name="documento" value="<?php echo $cont->documento; ?>" class="form-control" placeholder="Ingrese el documento del conductor." required data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Nombre conductor</label>
        <input type="text" name="nombre_conductor" value="<?php echo $cont->nombre_conductor; ?>" class="form-control" placeholder="Ingrese el nombre del conductor." required data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Apellido conductor</label>
        <input type="text" name="apellido_conductor" value="<?php echo $cont->apellido_conductor; ?>" class="form-control" placeholder="Ingrese el apellido del conductor." required data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Telefono conductor</label>
        <input type="text" name="telefono_conductor" value="<?php echo $cont->telefono_conductor; ?>" class="form-control" placeholder="Ingrese el telefono del conductor." required data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Fecha inicio</label>
        <input type="date" name="fecha_inicio" value="<?php echo $cont->fecha_inicio; ?>" class="form-control" placeholder="Ingrese la fecha de imicio." data-validacion-tipo="requerido|min:10" required/>
    </div>

     <div class="form-group">
        <label>Fecha fin</label>
        <input type="date" name="fecha_fin" value="<?php echo $cont->fecha_fin; ?>" class="form-control" placeholder="Ingrese la fecha de fin." data-validacion-tipo="requerido|min:10" required/>
    </div>

     <div class="form-group">
        <label>Costo</label>
        <input type="text" name="valor" value="<?php echo $cont->valor; ?>" class="form-control" placeholder="Ingrese el costo." data-validacion-tipo="requerido|min:10" required/>
    </div>

    <hr />

    
    <div class="text-right">
     <button class="btn btn-primary">Guardar</button>
     <a href="index.php?c=contrato" class="btn btn-danger">Volver</a>
    </div>
</form>