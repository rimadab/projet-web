<?php include ("../participant.php");?>
<?php
    // récuperation des donnee du formulaire ainsi que l'id de l'evenement a modifier
    $id = $_GET['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $cin = $_POST['cin'];
    $adresse = $_POST['adresse'];
    $num_tel = $_POST['num_tel'];
    
    $rec = new Participant();
    // appeler la fonction update qui permet de modifier un evenement
    $ok = $rec->update($id,$nom,$prenom,$cin,$adresse,$num_tel);
    if ($ok == FALSE)
        { echo "Probleme d'insertion ";}
    else
    {
        header('Refresh:0.1;url=listepart.php');// redirection vers la liste des evenement apres l'affichage de message alert
        echo '<script>
        alert("modification effectuer avec succées");
        </script>
        ';// le message d'alert
    }
?>
