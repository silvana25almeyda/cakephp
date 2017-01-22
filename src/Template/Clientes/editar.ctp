<div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Registro de Clientes</h3>
                </div>

<?= $this->Form->create($cliente, array('type' => 'file')); ?>
    <fieldset>
        <div class="container-fluid">
        <?= $this->Form->hidden('id') ?>
        <?= $this->Form->input('email',['class'=>"form-control",'maxLength'=>20, 'label' => 'Email']) ?>
        <?= $this->Form->input('password',['class'=>"form-control",'maxLength'=>20, 'label' => 'Password']) ?>
        <?= $this->Form->input('nombres',['class'=>"form-control",'maxLength'=>20, 'label' => 'Nombres']) ?>
        <?= $this->Form->input('apellidos',['class'=>"form-control",'maxLength'=>40, 'label' => 'Apellidos']) ?>
        <?= $this->Form->input('sexo',['class'=>"form-control",'maxLength'=>100, 'label' => 'Sexo']) ?>
        <?= $this->Form->input('nacimiento',['class'=>"form-control",'maxLength'=>100, 'label' => 'Nacimiento']) ?>
        <?= $this->Form->input('distritos_id', ['class'=>"form-control",'type' => 'select', 'multiple' => false, 'options' => $distritos, 'empty' => false]) ?>  
        <?= $this->Form->input('direccion',['class'=>"form-control",'maxLength'=>100, 'label' => 'Direccion']) ?>
        <?= $this->Form->input('foto',['class'=>"form-control",'type'=>'file', 'label' => 'Foto']) ?>
        <?= $this->Form->submit('Actualizar'); ?>
        </div>
    </fieldset>
<?= $this->Form->end(); ?>

<br/>

<?= $this->Html->link('<< Regresar', ['controller' => 'Productos', 'action' => 'index'])?>
</div>