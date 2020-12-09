<h1 class="page-header">
    <?php echo $usu->usuario != null ? $usu->usuario : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=usaurio">Usuario</a></li>
  <li class="active"><?php echo $usu->usuario != null ? $usu->tipo : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-usuario" action="?c=usuario&a=Editar"method="post" enctype="multipart/form-data">
    <input type="hidden" name="usuario" value="<?php echo $usu->usuario; ?>" />


    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="contrasena" value="<?php echo $usu->contrasena; ?>" class="form-control" placeholder="Ingrese el nombre del conductor." required data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Tipo de usuarior</label>
        <input type="text" name="tipo" value="<?php echo $usu->tipo; ?>" class="form-control" placeholder="Ingrese el apellido del conductor." required data-validacion-tipo="requerido|min:10" />
    </div>

    <hr />

    
    <div class="text-right">
     <button class="btn btn-primary">Guardar</button>
     <a href="index.php?c=usuario" class="btn btn-danger">Volver</a>
    </div>
</form>