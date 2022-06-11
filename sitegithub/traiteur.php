<?php
session_start();
try {
   $db = new PDO('mysql:host=localhost:3306;dbname=jamesh;charset=utf8;', 'root', 'root');
} catch (PDOException $e) {
   echo "connexion échouée:" . $e->getMessage();
}
if (isset($_POST['envoyer'])) {
   if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['age']) && !empty($_POST['numero']) && !empty($_POST['sexe']) && !empty($_POST['profession']) && !empty($_POST['message'])) {
      $nom = htmlspecialchars($_POST['nom']);
      $prenom = htmlspecialchars($_POST['prenom']);
      $mail = htmlspecialchars($_POST['mail']);
      $age = $_POST['age'];
      $numero = htmlspecialchars($_POST['numero']);
      $sexe = $_POST['sexe'];
      $profession = $_POST['profession'];
      $message = $_POST['message'];
      $insertUser = $db->prepare('INSERT INTO traiteur(nom,prenom,mail,age,numero,sexe,profession,message)VALUES(?,?,?,?,?,?,?,?)');
      $insertUser->execute(array($nom, $prenom, $mail, $age, $numero, $sexe, $profession, $message));

      $recupUser = $db->prepare('SELECT * FROM traiteur WHERE nom = ? AND prenom = ? AND mail = ? AND age = ? AND numero =? AND sexe = ? AND profession = ? AND message= ? ');
      $recupUser->execute(array($nom, $prenom, $mail, $age, $numero, $sexe, $profession, $message));
      if ($recupUser->rowCount() > 0) {
         $_SESSION['nom'] = $nom;
         $_SESSION['prenom'] = $prenom;
         $_SESSION['mail'] = $mail;
         $_SESSION['age'] = $age;
         $_SESSION['numero'] = $numero;
         $_SESSION['sexe'] = $sexe;
         $_SESSION['profession'] = $profession;
         $_SESSION['message'] = $message;
         $_SESSION['id'] = $recupUser->fetch()['id'];
      }
      echo "souscription reussie";
      header('location:accueil.php');
   } else {
      echo "veuilles remplir le formulaire";
   }
}
?>
<!DOCTYPE html>
<html>

<head>
   <title>FORMULAIRE</title>
   <meta charset="utf-8" />
</head>
<style>
   form {
      margin: 200px 100px 100px 100px;
      background-color: transparent;
      color: rgb(5, 5, 5);
      font-family: sans-serif;
      border-radius: 90px;
      padding: 50px;
      display: flexbox;

   }

   body {
      background-image: url(11.jpg);
      background-size: cover;
   }

   ul {
      background-color: honeydew;
      position: absolute;
      top: 2%;
      left: 20%;
      transform: translate(25%, 1%);
      margin: 0;
      padding: 0;
      display: flex;
      border-radius: 15px;
   }

   ul li {
      list-style: none;
      color: gray;
      font-family: Arial;
      font-size: 70px;
      letter-spacing: 15px;
      animation: flash 1.4s linear infinite;
   }

   @keyframes flash {
      0% {
         color: gray;
         text-decoration: none;
      }

      90% {
         color: gray;
         text-decoration: none;
      }

      100% {
         color: red;
         text-shadow: 0 0 7px gold, 0 0 50px rgb(49, 49, 59);
      }
   }

   ul li:nth-child(1) {
      animation-delay: .1s;
   }

   ul li:nth-child(2) {
      animation-delay: .2s;
   }

   ul li:nth-child(3) {
      animation-delay: .3s;
   }

   ul li:nth-child(4) {
      animation-delay: .4s;
   }

   ul li:nth-child(5) {
      animation-delay: .5s;
   }

   ul li:nth-child(6) {
      animation-delay: .6s;
   }

   ul li:nth-child(7) {
      animation-delay: .7s;
   }

   ul li:nth-child(8) {
      animation-delay: .8s;
   }

   ul li:nth-child(9) {
      animation-delay: .9s;
   }
</style>

<body>
   <ul>
      <li>T</li>
      <li>R</li>
      <li>A</li>
      <li>I</li>
      <li>T</li>
      <li>E</li>
      <li>U</li>
      <li>R</li>
   </ul>
   <form method="POST" action="">
      <div>
         <input type="text" name="nom" placeholder="nom" required>
      </div>
      <div>
         <input type="text" name="prenom" placeholder="prenom" required>
      </div>
      <div>
         <input type="text" name="mail" placeholder="mail" required>
      </div>
      <div>
         <input type="text" name="age" placeholder="age" required>
      </div>
      <div>
         <input type="text" name="numero" placeholder="numero" required>
      </div>
      <div>
         <input type="text" name="sexe" placeholder="sexe" required>
      </div>
      <div>
         <input type="text" name="profession" placeholder="profession" required>
      </div>
      <div>
         <input type="text" name=" platprefere " placeholder="platprefere" required>
      </div>
      <div>
         <textarea type="text" name="message" placeholder="entrez un message" rows="10" cols="50"></textarea>
      </div>
      <div>
         <input type="submit" name="envoyer">
      </div>
   </form>
</body>

</html>