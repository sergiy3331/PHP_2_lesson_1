<?php

namespace App\Models;

use App\Model;

class News extends Model
{
    const TABLE = 'news';
    const FK = 'id';

    public $title;
    public $text;
    public $author;
}

