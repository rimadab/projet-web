<?php include ("../evenement.php");?>
<?php
    // récuperation des donnee du formulaire ainsi que l'id de l'evenement a modifier
    $id = $_GET['id'];
    $nom_event = $_POST['nom'];
    $type_event = $_POST['type'];
    $date_db = $_POST['datedb'];
    $date_fin = $_POST['datefin'];
    
    $rec = new Evenement();
    // appeler la fonction update qui permet de modifier un evenement
    $ok = $rec->update($id,$nom_event,$type_event,$date_db,$date_fin);
    if ($ok == FALSE)
        { echo "Probleme d'insertion ";}
    else
    {
        header('Refresh:0.1;url=listevent.php');// redirection vers la liste des evenement apres l'affichage de message alert
        echo '<script>
        alert("modification effectuer avec succées");
        </script>
        ';// le message d'alert
    }
?>
