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
            logincontroller::welcome();
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
                session_start();
                $_SESSION['name'] = $login['name'];
                logincontroller::welcome();
            } else {
                die('Incorrect username / password combination!');
            }
        }
    }

    public static function logout() {
        $_SESSION['login'] = FALSE;
        session_destroy();
        header('location: log_in');
    }

    public static function welcome() {
        $_SESSION['login'] = TRUE;
        echo "<li class='active' style='position: center;'>";
        echo 'Hello: '.$_SESSION["name"].'<br>';
        echo '<form action="logout" method="POST">';
        echo '<button>Logout</button>';
        echo '</form></li>';
    }
}
?>