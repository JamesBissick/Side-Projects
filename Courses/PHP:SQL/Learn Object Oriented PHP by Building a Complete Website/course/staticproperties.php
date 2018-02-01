<?php
    class User {
        public $username;
        public static $minPassLength = 5;

        public static function validatePassword($password) {
            if(strlen($password) >= self::$minPassLength) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }
    $password = 'pass';

    if (User::validatePassword($password)) {
        echo 'Password is valid.';
    } else {
        echo 'Password is NOT valid';
    }
?>