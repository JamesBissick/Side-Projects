<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>$_POST</title>
    </head>
    <body>
        <!-- POST allows more data in, and is a bit more secure -->
        <form action="./Includes/post_display.php" method="POST">
            Name : <input type="text" name="name"><br>
            Email : <input type="email" name="email"><br>
            <input type="submit" value ="Submit">
        </form>
    </body>
</html>