<!DOCTYPE>
<html>
      <head>
            <meta charset = 'utf-8'>
            <title> </title>
      </head>
<body>
  <div id=logomarca> Componizer </div>
  <div id=login> <?php echo $this->Html->link('Acesar', array('controller' => 'users', 'action' => 'login'));?> </div>
  <div id=procurar> <?php echo $this->Html->link('Procurar', array('controller' => 'home', 'action' => 'procurar'));?> </div>
</body>

</html>
