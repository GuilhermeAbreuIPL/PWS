<?php

class Marca extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('nome', 'message' => 'Preencha o nome')
    );

    static $has_many = array(
        array('carros')
    );
}