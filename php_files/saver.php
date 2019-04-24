<?php



function save_data ($name, $surname, $email, $password) {
    require 'user.php';
    $user = new User;


    $result = $user->find($email);

    if (!empty($result)) {
        die  ("Your are already a user");
    }
    else {
       $user->save($name, $surname, $email, $password);

            $_SESSION['name'] = $name;
            header('location: welcome');

    }

}


//    $name = ($_POST['name']);
//    $surname = ($_POST['surname']);
//    $password = ($_POST['password']);
//    $email = ($_POST['email']);

//
//    $db = Db::getInstance();
//    $pdo = $db->getConnection();
 //   $sql = $pdo->prepare("SELECT * FROM users WHERE email='$email'");
   // $sql->bindParam(':email', $email);

 //   $sql->execute();
//    if ($sql->rowCount() > 0) {
//        die ("Your are already a user");
//    }
//
//    $hash = password_hash($password, PASSWORD_DEFAULT);
//
//    $sql = "INSERT INTO users (name,surname,email, password)"
//        . "VALUES ('$name' , '$surname', '$email','$hash')";
//    $stmt = $pdo->prepare($sql);
//
//    $stmt->bindValue(':username', $name);
//    $stmt->bindValue(':surname', $surname);
//    $stmt->bindValue(':email', $email);
//    $stmt->bindValue(':password', $hash);
//
//    $result = $stmt->execute();
//


?>