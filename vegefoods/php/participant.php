<?php
    include_once("Connexion.php");
    class Participant extends Connexion {
        private $id,$nom,$prenom,$cin,$adresse,$num_tel;
        function __construct($id="",$nom="",$prenom="",$cin="",$adresse="",$num_tel=""){
            $this->id=$id;
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->cin=$cin;
            $this->adresse=$adresse;
            $this->num_tel=$num_tel;
            parent::__construct();
        }
        // la fonction insert permet d'ajouter un participant
        function insert($nom,$prenom,$cin,$adresse,$num_tel,$id_event){
            $query="insert into participants (nom, prenom, cin, adresse, num_tel, id_event) values (?, ?, ?, ?, ?, ?)";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($nom,$prenom,$cin,$adresse,$num_tel,$id_event));
            $res->debugDumpParams();
        }
        // la fonction list permet de lister les donnee du table participant
        function list(){
            $query = "select * from participants";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        function get_nom_event($id){
            $query = "select * from evenements where id = ?";
            $res=$this->pdo->prepare($query);
            $res->execute(array($id));
            return $res;
        }
        // la fonction list permet de lister les donnee du table participant avec le tri par n°cin
        function tricin(){
            $query = "select * from participants order by cin";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        // la fonction list permet de lister les donnee du table participant avec le tri par nom
        function trinom(){
            $query = "select * from participants order by nom";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        // la fonction list permet de lister les donnee du table participant avec le tri par prenom
        function triprenom(){
            $query = "select * from participants order by prenom";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        // la fonction update permet de modifier un participant
        function update ($id,$nom,$prenom,$cin,$adresse,$num_tel){
            $query="update participants set nom = ?, prenom = ?, cin = ?, adresse = ?, num_tel = ? where id = ?";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($nom,$prenom,$cin,$adresse,$num_tel,$id));
        }
        // la fonction delete permet de supprimer un participant
        function delete($id){
            $query = "delete from participants where id=?";
            $res = $this->pdo->prepare($query);
            return $res->execute(array($id));
        }
       
    }
?>