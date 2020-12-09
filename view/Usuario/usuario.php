
<h1 class="page-header">Usuario</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=usuario&a=Nuevo">Nuevo Usuario</a>
    <a class="btn btn-danger" href="menu.php">Volver</a>
</div>

<table class="table table-hover ">
    <thead class="bg bg-primary">
        <tr>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Tipo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->usuario; ?></td>
            <td><?php echo $r->contrasena; ?></td>
            <td><?php echo $r->tipo; ?></td>
            <td>
                <a href="?c=usuario&a=Crud&usuario=<?php echo $r->usuario; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=usuario&a=Eliminar&usuario=<?php echo $r->usuario; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="well well-sm text-left">
    <a class="btn btn-primary" href="principal.html">Inicio</a>
    <a class="btn btn-primary" href="menu.php">Menú</a>
</div>
