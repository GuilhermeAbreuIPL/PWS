<?php


class Book extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('name'),
        array('isbn', 'message' => 'It must be provided'),
        array('genre_id')
    );

    static $belongs_to = array(
        array('genre')
    );

    static $has_many = array(
        array('chapters')
    );


}

