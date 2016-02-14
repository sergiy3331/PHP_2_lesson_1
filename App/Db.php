<?php

namespace App;


class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
    }

    public function execute($sql, $arg = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($arg);
        return $res;
    }

    public function query($sql, $class, $arg = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($arg);
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}