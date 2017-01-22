<div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Registro de Categorías</h3>
                </div>

<?= $this->Form->create($categoria); ?>
    <fieldset>
        <div class="container-fluid">
        <?= $this->Form->input('nombre',array('class'=>"form-control",'maxLength'=>20, 'label' => 'Nombre')) ?>
        <?= $this->Form->input('orden',array('class'=>"form-control",'maxLength'=>20, 'label' => 'Orden')) ?>
        <?= $this->Form->submit('Guardar'); ?>
        </div>
    </fieldset>
<?= $this->Form->end(); ?>

<br/>

<?= $this->Html->link('<< Regresar', ['controller' => 'Categorias', 'action' => 'index'])?>
</div>