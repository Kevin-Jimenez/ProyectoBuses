<h1 class="page-header">
    Nuevo 
</h1>

<ol class="breadcrumb">
  <li><a href="?c=buses">Contrato</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-buses" action="?c=contrato&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Id contrato</label>
      <input type="text" name="id_contrato" value="<?php echo $cont->id_contrato; ?>" class="form-control" placeholder="Ingrese la placa del vehiculo." data-validacion-tipo="requerido|min:20" required />
    </div>

    <div class="form-group">
        <label>Documento</label>
        <input type="text" name="documento" value="<?php echo $cont->documento; ?>" class="form-control" placeholder="Ingrese el documento del conductor." data-validacion-tipo="requerido|min:100" required/>
    </div>

    <div class="form-group">
        <label>Nombre conductor</label>
        <input type="text" name="nombre_conductor" value="<?php echo $cont->nombre_conductor; ?>" class="form-control" placeholder="Ingrese el nombre del conductor." data-validacion-tipo="requerido|min:100" required/>
    </div>

    <div class="form-group">
        <label>Apellido conductor</label>
        <input type="text" name="apellido_conductor" value="<?php echo $cont->apellido_conductor; ?>" class="form-control" placeholder="Ingrese el apellido del conductor." data-validacion-tipo="requerido|min:10" required/>
    </div>

     <div class="form-group">
        <label>Telefono conductor</label>
        <input type="text" name="telefono_conductor" value="<?php echo $cont->telefono_conductor; ?>" class="form-control" placeholder="Ingrese el telefono del conductor." data-validacion-tipo="requerido|min:10" required/>
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