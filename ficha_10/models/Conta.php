<?php


class Conta extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('numconta'),
        array('titular', 'message' => 'It must be provided'),
        array('nib', 'message' => 'It must be provided'),
        array('email', 'message' => 'It must be provided')
    );

    static $has_many = array(
        array('despesas')
    );
    static $validates_format_of = array(
             array('email', 'with' =>
        '/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/')
    );
}