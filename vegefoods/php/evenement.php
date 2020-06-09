<?php
    include_once("Connexion.php");
    class Evenement extends Connexion {
        private $id,$nom_event,$type_event,$date_db,$date_fin;
        function __construct($id="",$nom_event="",$type_event="",$date_db="",$date_fin=""){
            $this->id=$id;
            $this->nom_event=$nom_event;
            $this->type_event=$type_event;
            $this->date_db=$date_db;
            $this->date_fin=$date_fin;
            parent::__construct();
        }
        // la fonction insert permet d'ajouter un evenement 
        function insert($nom_event,$type_event,$date_db,$date_fin){
            $query="insert into evenements (nom_event, type_event, date_db, date_fin) values (?, ?, ?, ?)";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($nom_event,$type_event,$date_db,$date_fin));
        }
        // la fonction list permer de lister les donner du table evenement
        function list(){
            $query = "select * from evenements";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        // la fonction list permer de lister les donner du table evenement avec tri par nom devenement
        function trinom(){
            $query = "select * from evenements order by nom_event";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        // la fonction list permer de lister les donner du table evenement avec tri par type d'evenement
        function tritype(){
            $query = "select * from evenements order by type_event";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        // la fonction list permer de lister les donner du table evenement tri par la date début
        function tridate(){
            $query = "select * from evenements order by date_db";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        // la fonction update permet de modifier un evenement
        function update ($id,$nom_event,$type_event,$date_db,$date_fin){
            $query="update evenements set nom_event = ?, type_event = ?, date_db = ?, date_fin = ? where id = ?";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($nom_event,$type_event,$date_db,$date_fin,$id));
        }
        // la fonction delete permet de supprimer un evenement
        function delete($id){
            $query = "delete from evenements where id=?";
            $res = $this->pdo->prepare($query);
            return $res->execute(array($id));
        }
       
    }
?>