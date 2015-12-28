<?php 
	echo $this->Form->Create('Notification');
	echo "<table>";
	echo "<tr>";
		echo "<th> Id </th>";
		echo "<th> Nome </th>";
		echo "<th> Quantidade </th>";
		echo "<th> Remover </th>";
	echo "</tr>";
	foreach ($componentes as $id => $componente) {
		echo "<tr>";
			echo "<td>";
				echo $this->Form->input('componente_id',array('type' => 'text'/*,'disabled' => 'disabled',*/,'label' => false,'value' => $id));
			echo "</td>";
			echo "<td>".$componente[0]."</td>";
			echo "<td>";
				echo $this->Form->input('quantidade',array('type' => 'text','label' => false,'value' => $componente[1]));
			echo "</td>";
			echo "<td>";
                echo $this->Js->link('Remover', array('controller'=>'componentes', 'action'=>'rem_list',
                  $id),array('update'=>'#car'));
            echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo $this->Form->end('Concluir');
?>