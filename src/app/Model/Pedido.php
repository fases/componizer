<?php

class Pedido extends AppModel {

    public $name = 'Pedido';
    
    public $validate = array(
        'nome' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Insira o nome do componente desejado!'
        ));

}

?>
