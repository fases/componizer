<div class="login">
<?php echo $this->Session->flash('auth'); ?>
<fieldset>
        <legend><?php echo ('Login'); ?></legend>
<?php echo $this->Form->create('User',array('action' => 'login'));
      echo $this->Form->input('username');
      echo $this->Form->input('password');
      echo $this->Form->end("Login"); ?>
</fieldset>
</div>

<div class="procurar">
  <h3> Procurar Componentes </h3>
        <?php
        echo $this->Form->create('Componente', array('controller' => 'componentes', 'action' => 'search'));
        echo $this->Form->input('pedaco_nome', array('label' => 'Nome'));
        echo $this->Form->end('Procurar');
        ?>
</div>
