<?php

class Pedidos extends AppModel {

    public $name = 'Pedidos';
    
    public $validate = array(
        'nome' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Insira o nome do equipamento!'
        ),
        'descricao' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Insira alguma descrição!'
        ));

}

?>
