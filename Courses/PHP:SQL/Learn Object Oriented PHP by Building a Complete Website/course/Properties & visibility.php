<?php
    class User {
        public $id;
        public $username;
        public $email;
        public $password;

        public function __construct() {
            //echo 'Constructor called.';
        }
        public function register() {
            echo 'User Registered.';
        }
        public function login($username, $password) {
            $this->username = $username;
            $this->password = $password;
            $this->auth_user($username, $password);
            
        }
        public function auth_user($username, $password) {
            echo $username . ' is authenticated.';
        }
        public function __destruct() {
            //echo 'Destructor called.';
        }
    }

    $User = new User;
    //$User->register();
    $User->login('JamesHarrys', '1234');
?>