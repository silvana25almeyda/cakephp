
<?php  //foreach ($usuarios as $row) { var_dump($row); } ?>


<h2>Mantenimiento de Productos desde git prueba2</h2>

<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Lista de Productos</h3>
                </div>
    
<div class="table-responsive">
<table class="table table-striped table-hover ">
    <colgroup>
        <col width="80"/>
        <col/>
        <col/>
        <col/>
        <col/>
        <col/>
        <col/>
        <col width="80"/>
        <col width="80"/>
    </colgroup>
    <thead>
        <th>ID</th>
        <th>CATEGORIA</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th>PRECIO</th>
        <th>STOCK</th>
        <th>IMAGEN</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
    <?php
        foreach ($productos as $producto) {
    ?>
        <tr>
            <td><?= $producto->id ?></td>
            <td><?= $producto->categoria->nombre ?></td>
            <td><?= $producto->nombre ?></td>
            <td><?= $producto->descripcion ?></td>
            <td><?= $this->Number->currency($producto->precio, 'PEN', ['locale' => 'es_PE']) ?></td>
            <td><?= $producto->stock ?></td>
            <td><?=$this->Html->image('/catalogo/'.$producto->getImagen(), ['width'=>64])?></td>
                    <!--para la imagen de otra manera-->
            <!--$this->Html->image('/catalogo/'.(($producto->imagen)?$producto->imagen:'imagen.png'), ['alt' => $producto->imagen, 'width' => '64', 'height' => '64']);-->
            
            <td><?=$this->Html->link('Editar', '/productos/editar/'.$producto->id, ['class'=>'btn btn-warning'])?></td>
            <td><?=$this->Html->link('Eliminar', '/productos/eliminar/'.$producto->id, ['class'=>'btn btn-danger'])?></td>
        </tr>
    <?php
        }
    ?>
   </tbody>
</table>
</div>

<a href="http://localhost/cakephp/Productos/registrar" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i>Nuevo</a>
