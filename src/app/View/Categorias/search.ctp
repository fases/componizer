<h3>Busca de Componentes</h3>

<table>
    <tr>
        <th><?php echo $this->Paginator->sort('nome', 'Nome'); ?></th>
    </tr>

    <?php foreach ($categorias as $categoria): ?>
        <tr>
			       <td>
				           <?php echo $this->Html->link($categoria['Categoria']['nome'],
				               array('controller' => 'categorias', 'action' => 'view', $categoria['Categoria']['id'])); ?>
			      </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
    echo "<div class='paging'>";
        // the 'first' page button
        echo $this->Paginator->first("Início");
        // 'prev' page button,
        // we can check using the paginator hasPrev() method if there's a previous page
        // save with the 'next' page button
        if($this->Paginator->hasPrev()){
            echo $this->Paginator->prev("Anterior");
        }
        // the 'number' page buttons
        echo $this->Paginator->numbers(array('modulus' => 2));
        // for the 'next' button
        if($this->Paginator->hasNext()){
            echo $this->Paginator->next("Próximo");
        }
        // the 'last' page button
        echo $this->Paginator->last("Fim");
    echo "</div>";
?>
