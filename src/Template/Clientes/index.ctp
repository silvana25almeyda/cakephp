<?php  //foreach ($usuarios as $row) { var_dump($row); } ?>

<h2>Mantenimiento de Clientes</h2>
<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Lista de Clientes</h3>
                </div>
    
<div class="table-responsive">
<table class="table table-striped table-hover ">

    <thead>
        <th>ID</th>
        <th>EMAIL</th>
        <th>NOMBRES</th>
        <th>APELLIDOS</th>
        <th>SEXO</th>
        <th>NACIMIENTO</th>
        <th>DISTRITO</th>
        <th>DIRECCION</th>
        <th>FOTO</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
    <?php
        foreach ($clientes as $cliente) {
    ?>
        <tr>
            <td><?= $cliente->id ?></td>
            <td><?= $cliente->email ?></td>
            <td><?= $cliente->nombres ?></td>
            <td><?= $cliente->apellidos ?></td>
            <td><?= $cliente->sexo ?></td>
            <td><?= $cliente->nacimiento ?></td>
            <td><?= $cliente->distrito->nombre ?></td>
            <td><?= $cliente->direccion ?></td>
            <td><a href="/cakephp/Clientes/photo/<?=$cliente->id?>" target="_blank"><img src="/cakephp/Clientes/photo/<?=$cliente->id?>" height="64"/></a></td>
            <td><a href="/cakephp/Clientes/editar/<?=$cliente->id?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i>Editar</a></td>
           <td><a href="/cakephp/Clientes/eliminar/<?=$cliente->id?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>

        </tr>
    <?php
        }
    ?>
   </tbody>
   <tfoot>
       <tr>
           <td colspan="4">
               <ul class="pagination">
<!--                // Shows the page numbers-->
                <?= $this->Paginator->numbers() ?>
<!--                // Shows the next and previous links-->
                <?= $this->Paginator->prev('« Anterior') ?>
                <?= $this->Paginator->next('Siguiente »') ?>
<!--                // Prints X of Y, where X is current page and Y is number of pages-->
                <?= $this->Paginator->counter() ?>
               </ul>
           </td>
       </tr>
   </tfoot>

</table>
</div>
    <br>
<a href="/cakephp/Clientes/registrar" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i> Nuevo</a>

    <br>
    </div>