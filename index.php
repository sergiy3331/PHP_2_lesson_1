<?php

use App\Models\User;

require __DIR__ . '/autoload.php';

//$users = \App\Models\User::findById(2);

//$news = \App\Models\News::findLastNews(3);

//include __DIR__ . '/App/Views/index.php';

$user = new User();
$user->name = 'Vasj';
$user->email = 'v@pupkin.ru';
$user->insert();