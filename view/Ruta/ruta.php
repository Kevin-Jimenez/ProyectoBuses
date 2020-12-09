
<h1 class="page-header">Rutas</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=ruta&a=Nuevo">Nueva ruta</a>
    <a class="btn btn-danger" href="menu.php">Volver</a>
</div>

<table class="table table-hover ">
    <thead class="bg bg-primary">
        <tr>
            <th>Id  de ruta</th>
            <th>Nombre de ruta</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_ruta; ?></td>
            <td><?php echo $r->nombre_ruta; ?></td>
            <td>
                <a href="?c=ruta&a=Crud&id_ruta=<?php echo $r->id_ruta; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=ruta&a=Eliminar&id_ruta=<?php echo $r->id_ruta; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="well well-sm text-left">
    <a class="btn btn-primary" href="principal.html">Inicio</a>
    <a class="btn btn-primary" href="menu.php">Menú</a>
</div>

