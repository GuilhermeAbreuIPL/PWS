<?php

class Metodopagamento extends \ActiveRecord\Model
{
    static $has_many = array(
        array('despesas')
    );
}