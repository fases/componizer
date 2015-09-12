<h1> Editar Categoria </h1>
<?php
   echo $this->Form->create('Categoria', array('action' => 'edit'));
   echo $this->Form->input('nome');
   echo $this->Form->input('descricao',array('rows' => '5'));
   echo $this->Form->end('Salvar');
?>
