<?php 
	echo $this->Form->Create('Notification',array('action' => 'add'));
	echo "<table>";
	echo "<tr>";
		echo "<th> Id </th>";
		echo "<th> Nome </th>";
		echo "<th> Quantidade </th>";
	echo "</tr>";
	foreach ($componentes as $componente) {
		echo "<tr>";
			echo "<td>";
				echo $this->Form->input('componente_id',array('type' => 'text','disabled' => 'disabled','label' => false,'value' => $componente[0]));
			echo "</td>";
			echo "<td>".$componente[1]."</td>";
			echo "<td>";
				echo $this->Form->input('quantidade',array('type' => 'text','label' => false,'value' => $componente[2]));
			echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo $this->Form->end('Concluir');
?>