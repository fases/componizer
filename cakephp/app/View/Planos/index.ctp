<h1> Planos de Aula </h1>
<br>
<?php echo $this->Html->link('Adicionar plano de aula',array('action' => 'add_planoaula'));?>
<br>
<br>
<table>
  <th> ID </th>
  <th> Assunto </th>
  <th> Autor </th>
  <th> Data </th>
  <th> Hora </th>
  <th> Descrição </th>

  <?php foreach ($planos as $valor): ?>
<tr>
    <td> <?php echo $valor["Planoaulas"]["id_plano"]; ?> </td>
    <td> <?php echo $valor["Planoaulas"]["assunto_aula"]; ?> </td>
    <td> <?php echo $valor["Planoaulas"]["data_aula"]; ?> </td>
    <td> <?php echo $valor["Planoaulas"]["hora_aula"]; ?> </td>
    <td> <?php echo $valor["Planoaulas"]["descricao_aula"]; ?> </td>
    <td> <?php echo $this->Html->link('Editar', array('action' => 'edit_planoaula', $valor['Planoaulas']['id_plano']));?> </td>
    <td> <?php echo $this->Html->link('Remover',array('action' => 'delete_planoaula', $valor['Planoaulas']['id_plano']));?> </td>
</tr>
  <?php endforeach ?>
</table>
