<?php
$firstname = array(
    "William",
    "Henry",
    "Filbert",
    "John",
    "Pat",
    "James",
    "Harry",
    "Billy",
    "Christian",
);

$lastname = array(
    "Smith",
    "Jones",
    "Winkler",
    "Cooper",
    "Cline",
    "Colbert",
    "Harrys",
    "Stevenson",
    "Russel",
    "Cash",
);

shuffle($firstname);
shuffle($lastname);
for ($i = 0; $i <= 3; $i++) {
    echo $firstname[$i] . ' ' . $lastname[$i] . '<br>';
}

?>