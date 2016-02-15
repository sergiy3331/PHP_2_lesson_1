<?php

namespace App;
use App\Config;
use App\TSinglton;

class Db
{
    use TSinglton;
    protected $dbh;

    public function __construct()
    {
        $config = Config::instance();
        $this->dbh = new \PDO(
            $config->data['db']['driver'] . ':host='.
            $config->data['db']['host'] .';dbname=' .
            $config->data['db']['dbname'],
            $config->data['db']['user'],
            $config->data['db']['password']);
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