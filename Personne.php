<?php
include 'db.php';
class Personne {
    private $identifiantPersonne;
    private $nom;
    private $prenom;
    private $email;
    private $dateNaissance;

    public function __construct($identifiantPersonne, $nom, $prenom, $email, $dateNaissance){
        $this->identifiantPersonne = $identifiantPersonne;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->dateNaissance = $dateNaissance;
    }
    public function getIdentifiantPersonne(){
        return $this->identifiantPersonne;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function insertIntoDB(){
        $connexion = Db::Connection();
        // Préparation de la requête d'insertion
        $requete = $connexion->prepare('INSERT INTO Personne (IdentifiantPersonne, Nom, Prenom, Email, DateNaissance) VALUES (:identifiantCircuit, :nom, :prenom, :email, :dateNaissance)');

        // Liaison des valeurs aux paramètres de la requête
        $requete->bindParam(':identifiantPersonne', $this->identifiantPersonne);
        $requete->bindParam(':nom', $this->nom);
        $requete->bindParam(':prenom', $this->prenom);
        $requete->bindParam(':email', $this->email);
        $requete->bindParam(':dateNaissance', $this->dateNaissance);
        var_dump($requete);
        // Exécution de la requête
        $requete->execute();

        // Fermeture de la connexion à la base de données
        $connexion = null;
    }
}
