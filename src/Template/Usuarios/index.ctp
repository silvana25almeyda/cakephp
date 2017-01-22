<?php  //foreach ($usuarios as $row) { var_dump($row); } ?>

<h2>Mantenimiento de Usuarios</h2>
<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Lista de Usuarios</h3>
                </div>
    
<div class="table-responsive">
<table class="table table-striped table-hover ">

    <thead>
        <th>ID</th>
        <th>USUARIO</th>
        <th>ROL</th>
        <th>NOMBRES</th>
        <th>EMAIL</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
    <?php
        foreach ($usuarios as $usuario) {
    ?>
        <tr>
            <td><?= $usuario->id ?></td>
            <td><?= $usuario->username ?></td>
            <td><?= $usuario->rol->nombre ?></td>
            <td><?= $usuario->nombres ?></td>
            <td><?= $usuario->email ?></td>
            <td><a href="http://localhost/cakephp/Usuarios/editar/<?=$usuario->id?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i>Editar</a></td>
           <td><a href="http://localhost/cakephp/Usuarios/eliminar/<?=$usuario->id?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>

        </tr>
    <?php
        }
    ?>
   </tbody>
</table>
</div>
    <br>
<a href="http://localhost/cakephp/Usuarios/registrar" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i> Nuevo</a>

    <br>
    </div>