<?php ?>
<h2>Mantenimiento de Categorías</h2>

<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Lista de Categorias</h3>
                </div>
    
<div class="table-responsive">
<table class="table table-striped table-hover ">
    <colgroup>
        <col width="80"/>
        <col/>
        <col/>
        <col width="80"/>
        <col width="80"/>
    </colgroup>
    <thead >
        <th><?= $this->Paginator->sort('id', 'ID') ?></th>
        <th><?= $this->Paginator->sort('nombre', 'NOMBRE') ?></th>
        <th >&nbsp;</th>
        <th >&nbsp;</th>
    </thead>
    <tbody>
    <?php
        foreach ($categorias as $cat) {
    ?>
        <tr >
            <td ><?= $cat->id ?></td>
            <td><?= $cat->nombre ?></td>
            <td><a href="http://localhost/cakephp/Categorias/editar/<?=$cat->id?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i>Editar</a></td>
           <td><a href="http://localhost/cakephp/Categorias/eliminar/<?=$cat->id?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>

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
<br/>

<a href="http://localhost/cakephp/Categorias/registrar" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i>Nuevo</a>

