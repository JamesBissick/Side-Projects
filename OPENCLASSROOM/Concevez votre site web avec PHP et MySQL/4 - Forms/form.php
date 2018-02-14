<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Forms</title>
    </head>
    <body>
        <form method="post" action="target.php">
            <p>Veuillez taper votre pseudo :</p>
            <p>
                <input type="text" name="Pseudo" placeholder="Votre Pseudo">
                <input type="submit" value="Valider.">
            </p>

            <p>
                <textarea name="message" cols="30" rows="10" placeholder="Votre message ici."></textarea>
            </p>

            <select name="choix">
                <option value="choix1">Choix 1</option>
                <option value="choix2">Choix 2</option>
                <option value="choix3">Choix 3</option>
                <option value="choix4">Choix 4</option>
            </select>

            <input type="checkbox" name="case" id="case" /> <label for="case">Ma case à cocher</label>

            <br><br>
            Aimez-vous les frites ?
            <input type="radio" name="frites" value="oui" id="oui" checked="checked"> 
            <label for="oui">Oui</label>
            <input type="radio" name="frites" value="non" id="non"> 
            <label for="non">Non</label>
            
        </form>
    </body>
</html>