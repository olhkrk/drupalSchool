<?php
require 'user.php';

class LoginController {
    public static function save($name, $surname,$email, $password) {
        $user = new User;
        $result = $user->find($email);

        if (!empty($result)) {
            die  ("Your are already a user");
        }
        else {
            $user->save($name, $surname, $email, $password);
            $_SESSION['name'] = $name;
            header('location: http://localhost/welcome');
        }
    }

    public static function find($email, $password) {
        $user = new User();
        $login = $user->find($email);

        if (empty($login)) {
            die('Incorrect username / password combination!');
        } else {
            $logged = $user->checkCredentials($email, $password);
            if ($logged) {
                //session_start();
                $_SESSION['name'] = $login['name'];

                header('location: http://localhost/welcome');
            } else {
                die('Incorrect username / password combination!');
            }
        }
    }

    public static function logout() {
        setcookie("Hello", "", time() - 43200);
        session_destroy();
        header('location: log_in');
    }

    public static function welcome() {
        //$_SESSION["name"];
        echo 'Hello: '.$_SESSION["name"].'<br>';
        include '/home/drupal/PhpstormProjects/untitled/drupalSchool/html/welcome.php';
    }
}
?>