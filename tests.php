<?php
require_once __DIR__ . '/index.php';

use App\Db;

 $db = new Db();
 $table = App\Models\User::TABLE;
 $table_1 = App\Models\News::TABLE;
 $class = 'App\Models\User';
 $class_1 = 'App\Models\News';

 $sql_1 = ' SELECT * FROM ' . $table . ' WHERE name = :name AND email = :email; ';
 $sql_2 = ' SELECT * FROM ' . $table . ' WHERE name = :name; ';
 $sql_3 = ' SELECT * FROM ' . $table . ' WHERE name like :name; ';
 $sql_4 = ' SELECT * FROM ' . $table . ' WHERE id = :id; ';
 $sql_5 = ' SELECT * FROM ' . $table_1 . ' ORDER BY id DESC LIMIT 3; ';
 $sql_6 = ' SELECT * FROM ' . $table_1 . ' WHERE id = :id; ';

 $arg_1 = ['name' => 'Иванов Иван', 'email' => 'Ivanov@test.ru'];
 $arg_2 = ['name' => 'Иванов Сергей'];
 $arg_3 = ['name' => '%Иванов %'];
 $arg_4 = ['id' => 2];

 echo '<hr>';
 echo 'Поиск пользователя по Имени и Email (есть ли такой)<br>';
 $res = $db->execute($sql_1, $arg_1);
 echo '<pre>';
 var_dump($res);
 echo '</pre><hr>';

 echo 'Выборка данных пользователя по Имени и Email<br>';
 $result = $db->query($sql_1, $class, $arg_1);
 echo '<pre>';
 var_dump($result);
 echo '</pre><hr>';

 echo 'Выборка данных пользователя по Имени<br>';
 $result = $db->query( $sql_2, $class, $arg_2);
 echo '<pre>';
 var_dump($result);
 echo '</pre><hr>';

 echo 'Выборка данных пользователей по Имени с использованием like<br>';
 $result = $db->query($sql_3, $class, $arg_3);
 echo '<pre>';
 var_dump($result);
 echo '</pre><hr>';

echo 'возврат одной записи из таблицы<br>';
$result = $db->query($sql_4, $class, $arg_4);
echo '<pre>';
var_dump($result);
echo '</pre><hr>';

echo 'вывод 3 последних новостей<br>';
$result = $db->query($sql_5, $class_1);
echo '<pre>';
var_dump($result);
echo '</pre><hr>';

echo 'показ одной новости с заданным id<br>';
$result = $db->query($sql_6, $class_1, $arg_4);
echo '<pre>';
var_dump($result);
echo '</pre><hr>';