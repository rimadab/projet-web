<?php include ("../participant.php");?>
<?php
    //récuperation des donnee du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $cin = $_POST['cin'];
    $adresse = $_POST['adresse'];
    $num_tel = $_POST['num_tel'];
    $id_event = $_POST['id_event'];
    
    $rec = new Participant();
    // appeler la fonction insert qui permet d'ajouter un participant dans la table participant
    $ok = $rec->insert($nom,$prenom,$cin,$adresse,$num_tel,$id_event);
    if ($ok == FALSE)
        { echo "Probleme d'insertion ";}
    else
    {
        header('Refresh:0.1;url=listepart.php');// redirection vers la liste des particiapants apres l'affichage de message alert
        echo '<script>
        alert("insertion effectuer avec succées");
        </script>
        ';// le message d'alert
    }
?>
