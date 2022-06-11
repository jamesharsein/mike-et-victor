<?php
session_start();

if (isset($_POST['se connecter'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];


    $db = new PDO('mysql:host=localhost;dbname=user', 'root', '');

    $sql = "SELECT * FROM user where user ='$user' ";
    $result = $db->prepare($sql);
    $result->execute();

    if ($result->rowCount() > 0)
    {
        $data = $result->fetchAll();
        if (password_verify($password, $data[0]["password"]))
         {
            echo 'connexion effectuée';
            $_session['user'] = $user;
         }
    } 
    else
     {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user(user,password) VALUES ('$user','$password')";
        $req = $db->prepare($sql);
        $req->execute();
        echo 'enregistrement effectué';
    }
}
