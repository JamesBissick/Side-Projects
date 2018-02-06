<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>Projet</title>
    </head>
    <body>
        <div class="container">
            <div class="divider">
                
            </div>
            <div class="heading">
                <h2>Contactez-moi</h2>
            </div>
            <div class="row">
                <!-- (Bootstrap 4) mx-auto: permet de laisser la marge restante pour faire un col 12, ici 2 en marge -->
                <div class="col-lg-10 mx-auto">
                    <form id="contact-form" method="POST" action="<?php echo $_SERVER[] ?>" role="form">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Firstname<span class="blue"> *</span></label>
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Your firstname">
                                <p class="comments">Error message</p>
                            </div> 
                            <div class="col-md-6">
                                <label for="lastname">Lastname<span class="blue"> *</span></label>
                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Your lastname">
                                <p class="comments">Error message</p>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email<span class="blue"> *</span></label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="Your email">
                                <p class="comments">Error message</p>
                            </div>
                            <div class="col-md-6">
                                <label for="telephone">Telephone</label>
                                <input type="text" id="telephone" name="firstname" class="form-control" placeholder="Your telephone number">
                                <p class="comments">Error message</p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">Message<span class="blue"> *</span></label>
                                <textarea id="message" name="message" class="form-control" placeholder="Your message" rows="4"></textarea>
                                <p class="comments">Error message</p>
                            </div>
                            
                            <div class="col-md-12">
                                <p class="blue"><strong>* These informations are required</strong></p>
                            </div>
                            
                            <div class="col-md-12">
                                <input type="submit" class="button1" value="Submit">
                            </div>
                        </div> <!-- END OF ROW -->
                        
                        <p class="thank-you">You message has been sent. Thank you for contacting me!</p>
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>