<?php

namespace App;

abstract class Model
{
    const TABLE = '';
    const FK = '';

    public static function findAll()
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE, static::class);

    }

    public static function findById($id)
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE . ' WHERE ' . static::FK .
            ' =:id ', static::class, [':id '=>$id])[0] ? : false;
    }

    public static function findLastNews($limit)
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' .
            $limit, static::class);
    }
}