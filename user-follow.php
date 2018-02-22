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

       // On r�cup�re tout le contenu de la table friend
       $reponse = $bdd->query('SELECT * FROM friend,users,follower,commentaires');

       // On affiche chaque entr�e une � une
       while ($donnees = $reponse->fetch())
       {
       ?>
           <p>
           <strong>friend</strong> : <?php echo $donnees['friendName']; ?><br />
           est l'ami de : <?php echo $donnees['users_prenom']; ?><br />
           <em> depuis le <?php echo $donnees['friendDateVerif']; ?></em>
          </p>
       <?php
       }

       $reponse->closeCursor(); // Termine le traitement de la requ�te

       ?>
