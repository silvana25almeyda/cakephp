
<div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Registro de Usuarios</h3>
                </div>
<?= $this->Form->create($usuario); ?>
    <fieldset>
        <div class="container-fluid">
       
        <?= $this->Form->input('username',['class'=>"form-control",'maxLength'=>20, 'label' => 'Usuario']) ?>
               
        <?= $this->Form->input('password',['class'=>"form-control",'maxLength'=>40, 'label' => 'Clave']) ?>
            
            
        <?= $this->Form->input('roles_id', ['class'=>"form-control",'type' => 'select', 'multiple' => false, 'options' => $roles, 'empty' => false]) ?>
        <?= $this->Form->input('nombres',['class'=>"form-control",'maxLength'=>100, 'label' => 'Nombres']) ?>
        <?= $this->Form->input('email',['class'=>"form-control",'maxLength'=>100, 'label' => 'Correo']) ?>
        <?= $this->Form->submit('Guardar'); ?>
        </div>
    </fieldset>
<?= $this->Form->end(); ?>

<br/>

<?= $this->Html->link('<< Regresar', ['controller' => 'Usuarios', 'action' => 'index'])?>
</div>