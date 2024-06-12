<?php
class user extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('nome', 'message' => 'Preencha o nome do user'),
        array('nif', 'message' => 'Preencha o nif do user'),
        array('morada', 'message' => 'Preencha a morada do user')
    );

    static $has_many = array(
      array('carros')
    );


}