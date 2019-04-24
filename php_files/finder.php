<?php
function login ($email, $password)
{
    require 'user.php';

    $user = new User();

    $login = $user->find($email);

    if (empty($login)) {
        die('Incorrect username / password combination!');
    } else {
        $logged = $user->checkCredentials($email, $password);
        if ($logged) {
            session_start();
            $_SESSION[] = '';
            header('location: welcome');
        } else {
            die('Incorrect username / password combination!');
        }
    }
}


//  function login ($email, $password) {
//      require ('db.php');
//      $db = Db::getInstance();
//      $pdo = $db->getConnection();
//
//      session_start();
//      $_SESSION[] = '';
//
//          $sql ="SELECT * FROM users WHERE email='$email'";
//          $stmt = $pdo->prepare($sql);
//
//          $stmt->bindParam(':email', $email);
//
//          $stmt->execute();
//
//          $user = $stmt->fetch(PDO::FETCH_ASSOC);
//
//          if($user === false){
//              die('Incorrect username / password combination!');
//          }
//          else {
//
//
//              $validPassword = password_verify($password, $user['password']);
//
//              if($validPassword){
//
//                  $_SESSION['name'] = $user['name'];
//
//                  header('location: welcome');
//
//              }
//              else {
//                  die('Incorrect username / password combination!');
//              }
//          }
//  }

?>