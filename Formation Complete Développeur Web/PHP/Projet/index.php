<?php
    /* On demande à toutes ces variables d'être égale à "vide" */
    $firstname = $lastname = $email = $phone = $message = "";

    /* Initialiser les messages d'erreur pour qu'ils soient égales à "vide */
    $firstnameError = $lastnameError = $emailError = $phoneError = $messageError = "";

    // Message de remerciement final, false par défault pour ne pas afficher le message
    $isSuccess = FALSE;

    // Definir à qui on envoie un email
    $emailTo = "bissickj@gmail.com";

    /* Elles prendront les valeurs donné par l'utilisateur via $_POST*/
    /* On veut que les valeurs entrées reste affiché pour l'utilisateur, on va se servir des values dans les inputs */
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = verifyInput($_POST['firstname']);
        $lastname  = verifyInput($_POST['lastname']);
        $email  = verifyInput($_POST['email']);
        $phone  = verifyInput($_POST['phone']);
        $message  = verifyInput($_POST['message']);
        $isSuccess = TRUE;
        $emailText = "";

        // Vérification des informations avec empty()
        if (empty($firstname)) {
            $firstnameError = "Please enter your firstname.";
            $isSuccess = FALSE;
        } else {
            $emailText .= "FirstName: $firstname\n";
        }
        if (empty($lastname)) {
            $lastnameError = "Please enter your lastname.";
            $isSuccess = FALSE;
        } else {
            $emailText .= "Lastname: $lastname\n";
        }

        // If email isn't TRUE then emailError message
        if (!isEmail($email)) {
            $emailError = "This is not a valid email.";
            $isSuccess = FALSE;
        } else {
            $emailText .= "Email: $email\n";
        }
        // If phoneNumber isn't TRUE then phoneError message
        if (!isPhoneNumber($phone)) {
            $phoneError = "Enter your number with space.";
            $isSuccess = FALSE;
        } else {
            $emailText .= "Phone Number: $phone\n";
        }
        if (empty($message)) {
            $messageError = "Please enter your message.";
            $isSuccess = FALSE;
        } else {
            $emailText .= "Message: $message\n";
        }


        // Comfirmation envoie d'email
        if ($isSuccess) {
            $headers = "From: $firstname $lastname <$email>\rnReply-To: $email";
            mail($emailTo, "A message from your website", $emailText, $headers);
            // Remettre tous les champs à "vide"
            $firstname = $lastname = $email = $phone = $message = "";
        }
    }
    // Cas à part pour email
    function isEmail($var) {
        return filter_var($var, FILTER_VALIDATE_EMAIL); // Si l'email est valide: TRUE;
    }

    // Cas encore à part pour le tel
    function isPhoneNumber($var) {
        // Expressions régulières pour vérifier que le numéro est un tél valide
        // A noter l'espace aprés 9, qui signifie qu'on accepte les espaces
        return preg_match("/^[0-9 ]*$/", $var);
    }

    // Nous allons aussi protéger les inputs $_POST, verifyInput()
    function verifyInput($var) {
        $var = trim($var); // le but de trim est de supprimer tous les espaces supplémentaires
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        return $var;
    }
?>

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
                    <form id="contact-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">
                       <!-- htmlspecialchars() pour sécuriser  --> 
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Firstname<span class="blue"> *</span></label>
                                <input type="text" id="firstname" name="firstname" class="form-control" 
                                placeholder="Your firstname" value="<?php echo $firstname; ?>">
                                <p class="comments"><?php echo $firstnameError ?></p>
                            </div> 
                            <div class="col-md-6">
                                <label for="lastname">Lastname<span class="blue"> *</span></label>
                                <input type="text" id="lastname" name="lastname" class="form-control" 
                                placeholder="Your lastname" value="<?php echo $lastname; ?>">
                                <p class="comments"><?php echo $lastnameError ?></p>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email<span class="blue"> *</span></label>
                                <input type="email" id="email" name="email" class="form-control" 
                                placeholder="Your email" value="<?php echo $email; ?>">
                                <p class="comments"><?php echo $emailError ?></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Phone</label>
                                <input type="tel" id="phone" name="phone" class="form-control" 
                                placeholder="Your phone number" value="<?php echo $phone; ?>">
                            </div>
                            <div class="col-md-12">
                            <!-- required class="form-control" to force the user to fill this input -->
                                <label for="message">Message<span class="blue"> *</span></label>
                                <textarea id="message" name="message" required class="form-control" class="form-control" placeholder="Your message" rows="4"><?php echo $message ?></textarea>
                                <p class="comments"><?php echo $messageError ?></p>
                            </div>
                            
                            <div class="col-md-12">
                                <p class="blue"><strong>* These informations are required</strong></p>
                            </div>
                            
                            <div class="col-md-12">
                                <input type="submit" class="button1" value="Submit">
                            </div>
                        </div> <!-- END OF ROW -->
                        
                        <p class="thank-you" style="display: <?php if($isSuccess) echo 'block'; else echo 'none' ?>;">You message has been sent. Thank you for contacting me!</p>
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>