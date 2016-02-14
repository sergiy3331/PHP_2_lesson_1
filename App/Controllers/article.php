<?php

require __DIR__ . '/../../autoload.php';

$id = $_GET['id'] ?: false;
$article = App\Models\News::findById($id);
        include __DIR__ . '/../Views/article.php';


