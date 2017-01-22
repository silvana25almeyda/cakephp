<?php //foreach ($roles as $row) { var_dump($row); } ?>
<h2>Mantenimiento de Roles</h2>
<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Lista de Roles</h3>
                </div>
    
<div class="table-responsive">
<table class="table table-striped table-hover ">
    <colgroup>
        <col width="80"/>
        <col/>
        <col width="80"/>
        <col width="80"/>
    </colgroup>
    <thead >
        <th >ID</th>
        <th >NOMBRE</th>
        <th >&nbsp;</th>
        <th >&nbsp;</th>
    </thead>
    <tbody>
    <?php
        foreach ($roles as $rol) {
    ?>
        <tr >
            <td ><?= $rol->id ?></td>
            <td><?= $rol->nombre ?></td>
            <td><a href="http://localhost/cakephp/Roles/editar/<?=$rol->id?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i>Editar</a></td>
           <td><a href="http://localhost/cakephp/Roles/eliminar/<?=$rol->id?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>

        </tr>
    <?php
        }
    ?>
   </tbody>
</table>
<br/>
<a href="http://localhost/cakephp/Roles/registrar" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i> Nuevo</a>


