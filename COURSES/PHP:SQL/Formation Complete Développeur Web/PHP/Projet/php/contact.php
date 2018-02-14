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
        // If message is empty then $messageError
        if (empty($message)) {
            $messageError = "Please enter your message.";
            $isSuccess = FALSE;
        } else {
            $emailText .= "Message: $message\n";
        }


        // Comfirmation envoie d'email
        if ($isSuccess) {
            $headers = "From: $firstname $lastname <$email>\r\nReply-To: $email";
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