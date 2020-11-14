<?php

class MY_Session extends CI_Session
{

    public $dsds = "daniel";

    public function __construct(array $params = array())
    {
        var_dump($this);
        die;
        parent::__construct($params);
    }

    public function extendida()
    {
        echo "hola";
    }
}