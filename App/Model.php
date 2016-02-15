<?php

namespace App;

abstract class Model
{
    const TABLE = '';
    const FK = '';

    public $id;

    public static function findAll()
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE, static::class);

    }

    public static function findById($id)
    {
        $db = new Db();
        return $db->query(' SELECT * FROM ' . static::TABLE . ' WHERE ' . static::FK .
            ' =:id ', static::class);
    }

    public static function findLastNews($limit)
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE . ' ORDER BY ' . static::FK .
            ' DESC LIMIT ' . $limit, static::class);
    }

    public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if (!$this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $columns[] = $k;
            $values[':' . $k] = $v;
        }
        var_dump($values);

        $sql = 'INSERT INTO ' . static::TABLE . ' (' . implode(',', $columns) . ')
                VALUES (' . implode(',', array_keys($values)) . ')';
        $db = Db::instance();
        $db->execute($sql, $values);
    }
}