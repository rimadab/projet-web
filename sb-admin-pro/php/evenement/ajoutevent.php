<?php include ("../evenement.php");?>
<?php
    //récuperation des donnee du formulaire
    $nom_event = $_POST['nom'];
    $type_event = $_POST['type'];
    $date_db = $_POST['datedb'];
    $date_fin = $_POST['datefin'];
    
    $rec = new Evenement();
    // appeler la fonction insert qui permet d'ajouter un evenement dans la table evenement
    $ok = $rec->insert($nom_event,$type_event,$date_db,$date_fin);
    if ($ok == FALSE)
        { echo "Probleme d'insertion ";}
    else
    {
        header('Refresh:0.1;url=listevent.php');// redirection vers la liste des evenement apres l'affichage de message alert
        echo '<script>
        alert("insertion effectuer avec succées");
        </script>
        ';// le message d'alert
    }
?>
