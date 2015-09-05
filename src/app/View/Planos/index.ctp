<h1> Planos de Aula </h1>
<br>
<?php echo $this->Html->link('Adicionar plano de aula',array('action' => 'add'));?>
<br>
<br>
<table>
  <th> ID </th>
  <th> Assunto </th>
  <th> Data </th>
  <th> Hora </th>
  <th> Descrição </th>
  <th> Status </th>
<?php foreach ($planos as $valor): ?>
<tr>
    <td> <?php echo $valor['Plano']['id']; ?> </td>
    <td> <?php echo $this->Html->link($valor['Plano']['assunto_aula'],array('action' => 'view',$valor['Plano']['id'])); ?> </td>
    <td> <?php echo $valor['Plano']['data_aula']; ?> </td>
    <td> <?php echo $valor['Plano']['hora_aula']; ?> </td>
    <td> <?php echo $valor['Plano']['descricao_aula']; ?> </td>
    <td> <?php echo $valor['Plano']['status']; ?> </td>
    <td> <?php echo $this->Html->link('Editar', array('action' => 'edit', $valor['Plano']['id']));?> </td>
    <td> <?php echo $this->Html->link('Remover',array('action' => 'delete', $valor['Plano']['id']));?> </td>
</tr>
<?php endforeach ?>
</table>
