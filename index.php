<?php
if ($_SERVER['REQUEST_METHOD']=="POST" && $_SERVER['REQUEST_URI']=="/saver") {
    require '/home/drupal/PhpstormProjects/untitled/drupalSchool/php_files/loginController.php';

    $name = ($_POST['name']);
    $surname = ($_POST['surname']);
    $password = ($_POST['password']);
    $email = ($_POST['email']);
    logincontroller::save($name, $surname, $email, $password);
    exit();
}

if ( $_SERVER['REQUEST_URI']=="/log_in") {
    require '/home/drupal/PhpstormProjects/untitled/drupalSchool/html/log_in.html';

}

else if ($_SERVER['REQUEST_METHOD']=="POST" && $_SERVER['REQUEST_URI']=="/finder") {
    require '/home/drupal/PhpstormProjects/untitled/drupalSchool/php_files/loginController.php';

    $email = ($_POST['email']);
    $password = ($_POST['password']);
    logincontroller::find($email, $password);
    exit();
}

else if ($_SERVER['REQUEST_METHOD']=="POST" && $_SERVER['REQUEST_URI']=="/logout") {
    require '/home/drupal/PhpstormProjects/untitled/drupalSchool/php_files/loginController.php';
    logincontroller::logout();
    exit();

}

else {
        include '/home/drupal/PhpstormProjects/untitled/drupalSchool/html/index.html';

}

?>