
<div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Registro de Categorías</h3>
                </div>
    
<?= $this->Form->create($categoria); ?>
    <fieldset>
        <div class="container-fluid">
        <?= $this->Form->hidden('id') ?>
        <?= $this->Form->input('nombre',['class'=>"form-control",'maxLength'=>20, 'label' => 'Nombre']) ?>
        <?= $this->Form->input('orden',['class'=>"form-control",'maxLength'=>20, 'label' => 'Orden']) ?>
        <?= $this->Form->submit('Actualizar'); ?>
        </div>
    </fieldset>
<?= $this->Form->end(); ?>

<br/>

<?= $this->Html->link('<< Regresar', ['controller' => 'Categorias', 'action' => 'index'])?>

</div>
