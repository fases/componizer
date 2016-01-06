<?php 
	echo $this->Form->Create('Notification');
	echo "<table>";
	echo "<tr>";
		echo "<th> Nome </th>";
		echo "<th> Quantidade </th>";
		echo "<th> Remover </th>";
	echo "</tr>";
	if(!is_null($componentes)){
		echo $this->Form->create('Notification',array('controller' => 'emprestimos','action' => 'add'));
		$indice = 0;
          foreach ($componentes as $id => $componente) {
            echo "<tr>";
              echo $this->Form->input('Notification.'.$indice.'.componente_id',array('type' => 'text'/*,'disabled' => 'disabled'*/,'label' => false,'value' => $id,'type' => 'hidden'));
              echo "<td>".$componente[0]."</td>";
              echo "<td>";
                echo $this->Form->input('Notification.'.$indice.'.quantidade',array('type' => 'text','label' => false,'value' => $componente[1]));
              echo "</td>";
              echo "<td>";
                echo $this->Js->link('Remover', array('controller'=>'componentes', 'action'=>'rem_list',
                  $id),array('update'=>'#car'));
              echo "</td>";
            echo "</tr>";
            $indice++;
          }
		echo "</table>";
		echo $this->Form->end('Concluir');	
	}
?>