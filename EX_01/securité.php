<?php
session_start();

echo "<h1>"."Nom d'utilisateur: ".$_POST['Login']."</h1>";
echo "<h1>"."Mot de passe: ".$_POST['Password']."</h1>";

    if ($_POST['Password'] <> 2020){
echo "Mauvais couple identifiant/mot de passe";
echo "<br>";
echo '<a href="mini-site-routing.php?page=connexion">Cliquer ici</a>';
  }
    elseif ($_POST['Password'] == 2020){
        $_SESSION['id'] = $_POST['Login'];
        $cookie_name = "id";
        $cookie_value = $_SESSION['id'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        echo "<br";
        header('Location: mini-site-routing.php?page=1');
    exit();
    }
?>