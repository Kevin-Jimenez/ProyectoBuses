
<h1 class="page-header">Buses</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=buses&a=Nuevo">Nuevo Bus</a>
    <a class="btn btn-danger" href="menu.php">Volver</a>
</div>

<table class="table table-hover ">
    <thead class="bg bg-primary">
        <tr>
            <th >Placa</th>
            <th>Documento</th>
            <th >Nombre conductor</th>
            <th>Apellido conductor</th>
            <th>Id ruta</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->placa; ?></td>
            <td><?php echo $r->documento; ?></td>
            <td><?php echo $r->nombre_conductor; ?></td>
            <td><?php echo $r->apellido_conductor; ?></td>
             <td><?php echo $r->id_ruta; ?></td>
            <td>
                <a href="?c=buses&a=Crud&placa=<?php echo $r->placa; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=buses&a=Eliminar&placa=<?php echo $r->placa; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="well well-sm text-left">
    <a class="btn btn-primary" href="principal.html">Inicio</a>
    <a class="btn btn-primary" href="menu.php">Menú</a>
</div>
