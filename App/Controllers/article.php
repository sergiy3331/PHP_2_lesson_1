<?php

require __DIR__ . '/../../autoload.php';

$id = $_GET['id'];
$article = \App\Models\News::findById($id);
include __DIR__ . '/../Views/article.php';
var_dump($article);
var_dump($_GET['id']);


