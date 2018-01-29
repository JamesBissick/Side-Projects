<!-- !!!!! THIS NEEDS WORK !!!!! -->


<?php
    ini_set('display_errors', 'On');

    // Create a class called user

    class User {

        protected $dates = [
            'created',
        ];
        // This is supposed to convert my dates from a string to an object
        public function __construct() {
            foreach($this->$dates AS $date) {
                $property = $this->{$date};
                $this->{$date} = new DateTime($property);
            }
        }
        // Adding a public function that will be available outsite of the class
        public function getFullName() {
            return "{$this->firstname} {$this->lastname}";
        }
    }

    $db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');

    $req = $db->query("SELECT * FROM users");
    $req->setFetchMode(PDO::FETCH_CLASS, 'User');

    echo '<pre>', var_dump($req->fetch()), '</pre>';
    die();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PDO</title>
    </head>
    <body>
        <?php while($user = $req->fetch()): ?>
            <div class="user">
                <h4><?php echo $user->getFullName(); ?></h4>
                <p>Registered on <?php echo $user->created->format('d M Y'); ?></p> <!-- does not work -->
            </div>
        <?php endwhile; ?>
    </body>
</html>