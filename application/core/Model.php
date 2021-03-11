<?php

namespace application\core;

abstract class Model
{

    protected $db;

    public function __construct()
    {
        $this->db = new DataBase();
    }

}