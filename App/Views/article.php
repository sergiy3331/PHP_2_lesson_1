<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>одна новость</title>
</head>
<body>
<div>
    <article>
        <section>
            <h1>
                <?php echo $article->title; ?>
            </h1>

            <p>
                <?php echo $article->text; ?>
            </p>

            <address>
                <?php echo $article->author; ?>
            </address>
        </section>
    </article>
</div>
</body>
</html>
