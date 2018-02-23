<?php
    include ('pdo.php');

    // Pagination
    function paging($query/*variable contenant la requete*/,$records_per_page/*elements par page*/)
    {
        $starting_position=0;
        if(isset($_GET["page_no"]))
        {
            $starting_position=($_GET["page_no"]-1)*$records_per_page;
        }
        $query2=$query." limit $starting_position,$records_per_page";
        return $query2;
    }
    
    //Gère liens de la pagination
    function paginglink($query,$records_per_page, /*$param,*/$dsn)  //$dsn=array($pdo_connect_bd, $pdo_username, $pdo_password); les parametres pdo

    {
        // La page courante
        $self = $_SERVER['PHP_SELF'];
        
        $pdo = new PDO($dsn[0], $dsn[1], $dsn[2]); // instancie la connexion

        
        $result = $pdo->query($query);
        //$result->execute();
        
        $total_no_of_records = $result->rowCount();//compte le nombre d'images totales
        
        if($total_no_of_records > 0)
        {
            ?><ul class="pagination"><?php
            
            // Nb total de pages = ceil(total des lignes / nb lignes par page)
            $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
            
            // Page courante par défaut
            $current_page=1;
            
            // Page courante lue dans $_GET["page_no"]
            if(isset($_GET["page_no"]))
            {
                $current_page=$_GET["page_no"];
            }
            
            // Si on n'est pas à la 1ère page
            if($current_page!=1){
                // On peut revenir, définir $previous
                $previous =$current_page-1;
                
                // Afficher les liens : Premier et Précédent
                echo "<li><a href='".$self./*"?$param" . */"page_no=1'>Premier</a></li>";
                echo "<li><a href='".$self./*"?$param" . */"page_no=".$previous."'>Précédent</a></li>";
            }
            
            // Boucler pour avoir les liens intermédiaires
            for($i=1;$i<=$total_no_of_pages;$i++){
                if($i==$current_page){
                    echo "<li><a href='".$self./*"?$param" . */"page_no=".$i."' style='color:red;'>".$i."</a></li>";
                }
                else{
                    echo "<li><a href='".$self./*"?$param" . */"page_no=".$i."'>".$i."</a></li>";
                }
            }
            
            // Si on n'est pas à la dernière page, créer les liens Suivant et Dernier
            if($current_page!=$total_no_of_pages){
                $next=$current_page+1;
                echo "<li><a href='".$self./*"?$param" . */"page_no=".$next."'>Suivant</a></li>";
                echo "<li><a href='".$self./*"?$param" . */"page_no=".$total_no_of_pages."'>Dernier</a></li>";
            }
            ?></ul><?php
        }
    } // Fin liens de la pagination

?>