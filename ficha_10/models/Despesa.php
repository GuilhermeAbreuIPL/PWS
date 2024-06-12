<?php

class Despesa extends \ActiveRecord\Model
{
    static $belongs_to = array(
        array('conta'),
        array('categoria'),
        array('metodopagamento')
    );


    static $validates_presence_of = array(
        array('conta_id'),
        array('categoria_id'),
        array('metodopagamento_id'),
        array('data'),
        array('valor'),
        array('descricao')
    );
    static $validates_numericality_of = array(
        array('valor', 'greater_than' => 0.00, 'message' => 'O valor tem de ser positivo'),
    );

}