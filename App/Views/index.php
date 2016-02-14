<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>главная</title>
</head>
<body>
<div>
    <h1>
        Последние новости
    </h1>
    <?php foreach ($news as $article):?>
        <div>
            <h2>
                <a href="App/Controllers/article.php?id=<?php echo $article->id?>">
                    <?php echo $article->title?>
                </a>
            </h2>
            <p>
                <?php echo $article->text?>
            </p>
            <address>
                <?php echo $article->author?>
            </address>
            <br>
        </div>
    <?php endforeach ?>
</div>
</body>
</html>