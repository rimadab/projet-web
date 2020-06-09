<?php include ("../participant.php");?>
<?php    
    // récupération l'id d'evenement a supprimer
    $id = $_GET['id'];
    $rec = new Participant();
    // appeler la fonction delete qui permet de supprimer un evenement
    $ok = $rec->delete($id);
    if ($ok == FALSE)
    { echo "Probleme de delete ";}
else
{
    header('Refresh:0.1;url=listepart.php');// redirection vers la liste des participant  apres la suppression
        echo '<script>
        alert("suppression effectuer avec succées");

        </script>
        ';
    
 
}
?>
