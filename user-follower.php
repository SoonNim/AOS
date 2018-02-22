          <?php
  try
  {
  	// On se connecte � MySQL
  	$bdd = new PDO('mysql:host=localhost;dbname=aos2;charset=utf8', 'root', 'root');
  }
  catch(Exception $e)
  {
  	// En cas d'erreur, on affiche un message et on arr�te tout
          die('Erreur : '.$e->getMessage());
  }

  // Si tout va bien, on peut continuer

  // On r�cup�re tout le contenu de la table follower
  $reponse = $bdd->query('SELECT * FROM follower, users, friend, commentaires where users.users_id=follower.users_id');

  // On affiche chaque entr�e une � une
  while ($donnees = $reponse->fetch())
  {
  ?>
      <p>
      <strong>follower</strong> : <?php echo $donnees['followerName']; ?><br />

      follow : <?php echo $donnees['users_prenom']; ?><br />

      <?php echo $donnees['followerName']; ?> a laiss� ce commentaire pour <?php echo $donnees['users_prenom']; ?> :

      <em> <?php echo $donnees['commentaires'] ;
                  /*echo "<a href="action.php?id=1&action=modif">Modifier</a>\n"
                  echo "<a href="action.php?id=1&action=suppr">Supprimer</a>\n"
                  echo  "<a href="action.php?id=1&action=ajout">Ajouter</a>\n"*/
                  echo "<input methode='POST' type='submit' name='ajouter' value=' ajouter follower'/>\n"; ?></em>

       <br /><em>publi� le <?php echo $donnees['followerDateAjout']; ?></em>
     </p>
  <?php
  }

  $reponse->closeCursor(); // Termine le traitement de la requ�te

  ?>
