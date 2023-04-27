<?php
include 'db.php';
class Utilisateur {
   private $idUtilisateur;
   private $nomUtilisateur;
   private $motDePasse;
   private $email;

   public function __construct($idUtilisateur, $nomUtilisateur, $motDePasse, $email) {
       $this->idUtilisateur = $idUtilisateur;
       $this->nomUtilisateur = $nomUtilisateur;
       $this->motDePasse = $motDePasse;
       $this->email = $email;
   }

   // Getters
   public function getIdUtilisateur() {
       return $this->idUtilisateur;
   }

   public function getNomUtilisateur() {
       return $this->nomUtilisateur;
   }

   public function getMotDePasse() {
       return $this->motDePasse;
   }

   public function getEmail() {
       return $this->email;
   }

   // Setter pour le mot de passe (pour le hachage du mot de passe)
   public function setMotDePasse($motDePasse) {
       $this->motDePasse = password_hash($motDePasse, PASSWORD_DEFAULT);
   }

   // Méthode pour vérifier si un mot de passe est correct
   public function verifyMotDePasse($motDePasse) {
       return password_verify($motDePasse, $this->motDePasse);
   }

   // Méthode pour récupérer un utilisateur à partir de son identifiant
   public static function getUserById($idUtilisateur) {
       $connexion = Db::Connection();
       $requete = "SELECT * FROM Utilisateur WHERE idUtilisateur = ?";
       $statement = $connexion->prepare($requete);
       $statement->execute(array($idUtilisateur));
       $donnees = $statement->fetch();
       if ($donnees != null) {
           return new Utilisateur($donnees['idUtilisateur'], $donnees['nomUtilisateur'], $donnees['motDePasse'], $donnees['email']);
       } else {
           return null;
       }
   }

   // Méthode pour récupérer un utilisateur à partir de son nom d'utilisateur et de son mot de passe
   public static function getUserByCredentials($nomUtilisateur, $motDePasse) {
       $connexion = Db::Connection();
       $requete = "SELECT * FROM Utilisateur WHERE nomUtilisateur = ?";
       $statement = $connexion->prepare($requete);
       $statement->execute(array($nomUtilisateur));
       $donnees = $statement->fetch();
       if ($donnees != null && password_verify($motDePasse, $donnees['motDePasse'])) {
           return new Utilisateur($donnees['idUtilisateur'], $donnees['nomUtilisateur'], $donnees['motDePasse'], $donnees['email']);
       } else {
           return null;
       }
   }
}
