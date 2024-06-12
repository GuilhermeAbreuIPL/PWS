<?php

class Carro extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('user_id'),
        array('marca_id'),
        array('cilindrada', 'message' => 'Preencha a cilindrada')
    );

    static $belongs_to = array(
        array('user'),
        array('marca'),
    );

}