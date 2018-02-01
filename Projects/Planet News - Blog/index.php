<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <title>Blog: Planet News!</title>
</head>
    <header>
        <h1>
            <a href="index.php">Planet News</a>
        </h1>
        <div class="logo">
            <img src="./img/news.png" alt="planetnews">
        </div>
        
        <div class="headband"></div>
    </header>

    <body>
        <article>
            <?php
                include_once('./includes/articles_display.inc.php');
            ?>
        <article>

    </body>
</html>