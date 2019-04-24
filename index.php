<?php
require '/home/drupal/PhpstormProjects/untitled/drupalSchool/php_files/loginController.php';
if (!isset($_COOKIE['Hello'])) {
    session_start();
}
switch ($_SERVER['REQUEST_URI'])
{
    case "/saver":
        if ($_SERVER['REQUEST_METHOD']=="POST") {

            $name = ($_POST['name']);
            $surname = ($_POST['surname']);
            $password = ($_POST['password']);
            $email = ($_POST['email']);
            logincontroller::save($name, $surname, $email, $password);
            exit();
        } elseif (isset($_SESSION["name"])){
            logincontroller::welcome();
            exit();
        }
        break;

    case "/welcome":
        if (isset($_SESSION["name"])) {
            logincontroller::welcome();
            exit();
        }
        else {
            require '/home/drupal/PhpstormProjects/untitled/drupalSchool/html/log_in.html';
        }
        break;

    case "/log_in":

        if (isset($_SESSION["name"])) {
            logincontroller::welcome();
            exit();

        }
        else{
            require '/home/drupal/PhpstormProjects/untitled/drupalSchool/html/log_in.html';
        }

        break;

    case "/finder":
        if ($_SERVER['REQUEST_METHOD']=="POST") {

            $email = ($_POST['email']);
            $password = ($_POST['password']);
            logincontroller::find($email, $password);
            exit();
        }
        elseif (isset($_SESSION["name"])){
            logincontroller::welcome();
            exit();
        }
        break;

    case "/logout":
        logincontroller::logout();
        break;

    default:
        if (isset($_SESSION["name"])) {
            logincontroller::welcome();
            exit();
        }
        else {
            include '/home/drupal/PhpstormProjects/untitled/drupalSchool/html/index.html';
        }
        break;

}
?>