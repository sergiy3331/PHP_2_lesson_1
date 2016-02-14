<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>одна новость</title>
</head>
<body>
<h1>
    Показ одной новости
</h1>
<div>
    <h2>
        <?php echo $article->title?>
    </h2>
    <p>
        <?php echo $article->text?>
    </p>
    <address>
        <?php echo $article->author?>
    </address>
    <br>
</div>
</body>
</html>
