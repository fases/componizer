<h1>Adicionar Plano de Aula</h1>
<?php
      echo $this->Form->create('Plano', array('action' => 'add'));
      echo $this->Form->input('assunto_aula');
      echo $this->Form->input('data_aula', array(
              'label' => 'Data da aula',
              'type' => 'date','dateFormat' => 'DMY'
      ));
      echo $this->Form->input('hora_aula',array(
            'label' => 'Hora da aula',
            'type' => 'time', 'selected' => '13:30:00'));
      echo $this->Form->input('descricao_aula');
      echo $this->Form->input('status', array('options' => array('solicitado'=>'Solicitado')));
      echo $this->Form->end('Cadastrar');
  ?>

</body>

</html>
