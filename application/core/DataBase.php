<?php

namespace application\core;

class DataBase{

    protected $connect;
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $pass;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->port = '5432';
        $this->dbname = 'kirillshish';
        $this->user = 'postgres';
        $this->pass = '';
        $this->connect = pg_connect('host='.$this->host.' port='.$this->port.' dbname='.$this->dbname.' user='.$this->user);
    }

    public function getAll($sql)
    {
        $result = [];
        $query = pg_query($this->connect,$sql);
        while($temp = pg_fetch_assoc($query)){
            $result[] = $temp;
        }
        return $result;
    }

}