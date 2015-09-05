<!DOCTYPE>
<html>
      <head>
            <meta charset = 'utf-8'>
            <title> </title>
      </head>
<body>
  <h1>Adicionar Plano de Aula</h1>
  <?php
      echo $this->Form->create('Planoaulas', array('action' => 'add_planoaula'));
      echo $this->Form->input('assunto_aula');
      echo $this->Form->input('data_aula', array(
              'label' => 'Data da aula',
              'type' => 'date','dateFormat' => 'DMY'
      ));
      echo $this->Time->format('hora_aula',array(
            'label' => 'Hora da aula',
            'type' => 'time', 'timeFormat' => 'HM'
      ));
      echo $this->Form->input('descricao_aula');
      echo $this->Form->end('Cadastrar');
  ?>

</body>

</html>
