<?php
session_start();
try {
    $db = new PDO('mysql:host=localhost:3306;dbname=jamesh;charset=utf8;', 'root', 'root');
} catch (PDOException $e) {
    echo "connexion échouée:" . $e->getMessage();
}
if (isset($_POST['submit'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['mdp'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);

        $recupUser = $db->prepare('SELECT*FROM users WHERE pseudo = ? AND mdp = ?');
        $recupUser->execute(array($pseudo, $mdp));

        if ($recupUser->rowCount() > 0) {
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            echo "connecté avec succès";
            header('location:accueil.php');
        } else {
            echo "votre mot de passe ou pseudo est incorrect sinon veuillez vous inscrire";
            header('location:inscription.php');
        }
    } else {
        echo "veuillez compléter tous les champs";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>connexion à Mike-Victor</title>
    <link href="inscription.php" rel="php" />
</head>
<style>
    body {
        margin: 0;
        background-color: yellow;
    }

    h1 {
        border: 15px maroon solid;
        border-radius: 15px 15px 15px 15px;
        color: rgb(5, 5, 5);
        background-image: url(https://st2.depositphotos.com/3889193/7086/i/600/depositphotos_70863797-stock-photo-diy-and-home-improvement-banner.jpg);
        text-align: center;
        margin-left: 25px;
        margin-right: 25px;
        margin-top: 15px;
        margin-bottom: 5px;
        font-family: 'Send Flowers', cursive;
    }

    section {
        height: 100vh;
        background-image: url(https://a-static.besthdwallpaper.com/motions-de-couleur-fond-d-ecran-2560x1440-33637_51.jpg);
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        animation-name: back;
        animation-duration: 5s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    form {
        width: 500px;
        background-color: rgba(0, 0, 0, 0.4);
        padding: 60px;
        box-sizing: border-box;
        border-radius: 20px;
    }

    input {
        display: block;
        margin: 10px auto;
        width: 300px;
        padding: 6px 10px;
        outline: none;
        border: none;
        box-sizing: border-box;
        border-radius: 6px;
    }

    input [type="submit"] {
        background-color: #0E0;
        font-weight: bold;
        cursor: pointer;
    }

    @keyframes back {
        0% {
            filter: hue-rotate(0deg);
        }

        100% {
            filter: hue-rotate(360deg);
        }
    }
</style>

<body>
    <h1 align="center">MIKE-VICTOR Co</h1>
    <section>
        <form method="post" action="">
            <div>
                <input type="text" name=" pseudo" placeholder="pseudo" required>
            </div>
            <div>
                <input type="password" name="mdp" placeholder="password" required>
            </div>
            <div>
                <input type="submit" name="submit">
            </div>
        </form>
    </section>
</body>

</html>