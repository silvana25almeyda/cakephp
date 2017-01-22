
<div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Registro de Productos</h3>
                </div>
<?= $this->Form->create($producto, array('type' => 'file')); ?>
    <fieldset>
        <div class="container-fluid">
        <?= $this->Form->input('categorias_id', ['class'=>"form-control",'type' => 'select', 'multiple' => false, 'options' => $categorias, 'empty' => false]) ?>
        <?= $this->Form->input('nombre',['class'=>"form-control",'maxLength'=>20, 'label' => 'Nombre']) ?>
        <?= $this->Form->input('descripcion',['class'=>"form-control",'maxLength'=>40, 'label' => 'Descripcion']) ?>
        <?= $this->Form->input('precio',['class'=>"form-control",'maxLength'=>100, 'label' => 'Precio']) ?>
        <?= $this->Form->input('stock',['class'=>"form-control",'maxLength'=>100, 'label' => 'Stock']) ?>
        <?= $this->Form->input('imagen',['class'=>"form-control",'type'=>'file', 'label' => 'Imagen']) ?>
        <?= $this->Form->submit('Guardar'); ?>
            </div>
    </fieldset>
<?= $this->Form->end(); ?>

<br/>

<?= $this->Html->link('<< Regresar', ['controller' => 'Productos', 'action' => 'index'])?>
</div>