<html>
  <body>
  
  <form method="post" action="reception.php" enctype="multipart/form-data">
     <label for="icone">Icône du fichier (JPG, JPEG ou PNG | max. 2 Mo) :</label><br />
     <input type="file" name="icone" id="icone" /><br />
     <label for="mon_fichier">Fichier (tous formats | max. 2 Mo) :</label><br />
     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     <input type="file" name="mon_fichier" id="mon_fichier" /><br />
     <label for="titre">Titre du fichier (max. 4 caractères) :</label><br />
     <input type="text" name="titre" value="Titre du fichier" id="titre" /><br />
     <label for="description">Description de votre fichier (max. 255 caractères) :</label><br />
     <textarea name="description" id="description"></textarea><br />
     <input type="submit" name="submit" value="Envoyer" />

    </form>
    </form>
  </body>
</html>