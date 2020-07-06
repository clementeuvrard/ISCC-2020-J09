<!DOCTYPE html>
<HTML>

    <HEAD>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <metacharset="utf-8">
        <title>mini-site-routing</title>

    </HEAD>

    <body>

        <nav class="nav">
        
     <ul>
           
           <li><a href="http://localhost/ISCC-2020-J08/EX_01/mini-site-routing.php?page=1">Accueil</a></li>
           <li><a href="http://localhost/ISCC-2020-J08/EX_01/mini-site-routing.php?page=2">Page 2</a></li>
           <li><a href="http://localhost/ISCC-2020-J08/EX_01/mini-site-routing.php?page=3">Page 3</a></li>
        
    </ul>
        </nav>

        <header>
         <?php

            if ($_GET ["page"] == 1){
                echo "<h1>"."ACCUEIL!"."</h1>";
            }
            elseif ($_GET ["page"] == 2){
                echo "<h1>"."PAGE 2!"."</h1>";
            }
            elseif ($_GET ["page"] == 3){
                echo "<h1>"."PAGE 3!"."</h1>";
            }
            elseif ($_GET ["page"] == 4){
                include "connexion.php";
            }

            if (isset($_COOKIE['id'])){
                echo '<a href="http://localhost/ISCC-2020-J09/EX-01/admin.php">admin</a>';
            }
            ?>

        </header>

    </body>
</HTML>