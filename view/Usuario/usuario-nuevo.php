<h1 class="page-header">
    Nuevo 
</h1>

<ol class="breadcrumb">
  <li><a href="?c=buses">Usuarios</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-usuario" action="?c=usuario&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Usuario</label>
      <input type="text" name="usuario" value="<?php echo $usu->usuario; ?>" class="form-control" placeholder="Ingrese el usuario." data-validacion-tipo="requerido|min:20" required />
    </div>

    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="contrasena" value="<?php echo $usu->contrasena; ?>" class="form-control" placeholder="Ingrese la contraseña." data-validacion-tipo="requerido|min:100" required/>
    </div>

    <div class="form-group">
        <label>Tipo de usuario</label>
        <input type="text" name="tipo" value="<?php echo $usu->tipo; ?>" class="form-control" placeholder="Ingrese el tipo de usuario." data-validacion-tipo="requerido|min:100" required/>
    </div>

    <hr />

    
    <div class="text-right">
     <button class="btn btn-primary">Guardar</button>
     <a href="index.php?c=usuario" class="btn btn-danger">Volver</a>
    </div>
</form>