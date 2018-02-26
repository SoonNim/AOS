<?php

  $dossier = '../../upload/';
  $fichier = basename($_FILES['img']['name']);
  $msg ="";

  //On fait un tableau contenant les extensions autorisées.
  //Comme il s'agit d'un avatar pour l'exemple, on ne prend que des extensions d'images.
  $extensions = array('.png', '.gif', '.jpg', '.jpeg');
  // récupère la partie de la chaine à partir du dernier . pour connaître l'extension.
  $extension = strrchr($_FILES['img']['name'], '.');

  if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
  {
       $msg = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
       return $msg;
       exit;
  }
  else {
    // taille maximum (en octets)
    $taille_maxi = 10000000;
    //Taille du fichier
    $taille = filesize($_FILES['img']['tmp_name']);

    if($taille>$taille_maxi)
    {
         $msg = 'Le fichier est trop gros...';
         return $msg;
         exit;
    }
    else {
      //On remplace les lettres accentutées par les non accentuées dans $fichier.
      //Et on récupère le résultat dans fichier
      $fichier = strtr($fichier,
           'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
           'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');

           //En dessous, il y a l'expression régulière qui remplace tout ce qui n'est pas une lettre non accentuées ou un chiffre
           //dans $fichier par un tiret "-" et qui place le résultat dans $fichier.
           $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

           if(move_uploaded_file($_FILES['img']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
           {
                return $msg = 1;
           }
           else //Sinon (la fonction renvoie FALSE).
           {
                $msg = 'Echec de l\'upload !';
                exit;
           }
         }
    }

?>
