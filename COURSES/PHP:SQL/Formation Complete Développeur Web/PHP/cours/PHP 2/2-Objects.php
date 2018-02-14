<?php
    class Student {
        public $activeStudent = TRUE; // we set $activeStudent to TRUE by default
        public $name;
        public $age;
        public $schoolmarks;

        // function construct allows to create a new instance or object
        // Let's make our new instance and make it have the above properties
        public function __construct($name, $age, $schoolmarks) {
            // '$this' means this exact object, that we're using right here
            $this->name = $name;
            $this->age = $age;
            $this->schoolmarks = $schoolmarks;
        }
        public function introducesHimself() {
            if($this->activeStudent) {
                echo "My name is $this->name and I am $this->age" . "yo.<br>";
                foreach($this->schoolmarks as $class => $mark) {
                    echo "In $class, I had $mark/20.<br>"; // Don't forget, $schoolmarks as been renamed as $mark
                }
            }
        }
    }

    $schoolmarksofJames = array('Maths' => 15, 'French' => 12, 'English' => 18, 'HTML' => 17, 'Javascript' => 11);
    $James = new Student("James", "25", $schoolmarksofJames);
    $James->introducesHimself();

    echo '<br><br>';

    $schoolmarksofHarrys = array('Philosophy' => 15, 'Chinese' => 12, 'English' => 18, 'HTML' => 17, 'PHP' => 11);
    $Harrys = new Student("Harrys", "21", $schoolmarksofHarrys);
    $Harrys->introducesHimself();
?>