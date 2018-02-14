<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>POST</title>
    </head>
    <body>
        <p>
            <!-- If something doesn't work, make sure you properly write your HTML (I forgot an '=' symbole before) -->
            Hello, my name is <?php if(!empty($_POST['name'])) echo $_POST['name']; ?> and my E-mail is <?php if(!empty($_POST['email'])) echo $_POST['email']; ?>
        </p>
         
    </body>
</html>