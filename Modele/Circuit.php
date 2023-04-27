<?php
include 'db.php';
class Circuit {
    private $identifiantCircuit;
    private $descriptif;
    private $villeDepart;
    private $paysDepart;
    private $villeArrivee;
    private $paysArrivee;
    private $dateDepart;
    private $nbrPlaceDisponible;
    private $duree;
    private $prixInscription;
 
    public function __construct($identifiantCircuit, $descriptif, $villeDepart, $paysDepart, $villeArrivee, $paysArrivee, $dateDepart, $nbrPlaceDisponible, $duree, $prixInscription) {
        $this->identifiantCircuit = $identifiantCircuit;
        $this->descriptif = $descriptif;
        $this->villeDepart = $villeDepart;
        $this->paysDepart = $paysDepart;
        $this->villeArrivee = $villeArrivee;
        $this->paysArrivee = $paysArrivee;
        $this->dateDepart = $dateDepart;
        $this->nbrPlaceDisponible = $nbrPlaceDisponible;
        $this->duree = $duree;
        $this->prixInscription = $prixInscription;
    }
 
    // Getters
    public function getIdentifiantCircuit() {
        return $this->identifiantCircuit;
    }
    
    public function getDescriptif() {
        return $this->descriptif;
    }
 
    public function getVilleDepart() {
        return $this->villeDepart;
    }
 
    public function getPaysDepart() {
        return $this->paysDepart;
    }
 
    public function getVilleArrivee() {
        return $this->villeArrivee;
    }
 
    public function getPaysArrivee() {
        return $this->paysArrivee;
    }
 
    public function getDateDepart() {
        return $this->dateDepart;
    }
 
    public function getNbrPlaceDisponible() {
        return $this->nbrPlaceDisponible;
    }
 
    public function getDuree() {
        return $this->duree;
    }
 
    public function getPrixInscription() {
        return $this->prixInscription;
    }
 
    // Setters
    public function setDescriptif($descriptif) {
        $this->descriptif = $descriptif;
    }
 
    public function setVilleDepart($villeDepart) {
        $this->villeDepart = $villeDepart;
    }
 
    public function setPaysDepart($paysDepart) {
        $this->paysDepart = $paysDepart;
    }
 
    public function setVilleArrivee($villeArrivee) {
        $this->villeArrivee = $villeArrivee;
    }
 
    public function setPaysArrivee($paysArrivee) {
        $this->paysArrivee = $paysArrivee;
    }
 
    public function setDateDepart($dateDepart) {
        $this->dateDepart = $dateDepart;
    }
 
    public function setNbrPlaceDisponible($nbrPlaceDisponible) {
        $this->nbrPlaceDisponible = $nbrPlaceDisponible;
    }
 
    public function setDuree($duree) {
        $this->duree = $duree;
    }
 
    public function setPrixInscription($prixInscription) {
        $this->prixInscription = $prixInscription;
    }

    public function insertIntoDB(){
        $connexion = Db::Connection();
        // Préparation de la requête d'insertion
        $requete = $connexion->prepare('INSERT INTO Circuit (IdentifiantCircuit, Descriptif, VilleDepart, PaysDepart, VilleArrivee, PaysArrivee, DateDepart, NbrPlaceDisponible, Duree, PrixInscription) VALUES (:identifiantCircuit, :descriptif, :villeDepart, :paysDepart, :villeArrivee, :paysArrivee, :dateDepart, :nbrPlaceDisponible, :duree, :prixInscription)');

        // Liaison des valeurs aux paramètres de la requête
        $requete->bindParam(':identifiantCircuit', $this->identifiantCircuit);
        $requete->bindParam(':descriptif', $this->descriptif);
        $requete->bindParam(':villeDepart', $this->villeDepart);
        $requete->bindParam(':paysDepart', $this->paysDepart);
        $requete->bindParam(':villeArrivee', $this->villeArrivee);
        $requete->bindParam(':paysArrivee', $this->paysArrivee);
        $requete->bindParam(':dateDepart', $this->dateDepart);
        $requete->bindParam(':nbrPlaceDisponible', $this->nbrPlaceDisponible);
        $requete->bindParam(':duree', $this->duree);
        $requete->bindParam(':prixInscription', $this->prixInscription);

        // Exécution de la requête
        $requete->execute();

        // Fermeture de la connexion à la base de données
        $connexion = null;
    }
    public static function getAllCircuits(){
        $connexion = Db::Connection();
        $requete = "SELECT * FROM Circuit";
        $resultat = $connexion->query($requete);
        $listeCircuits = array();
        while ($donnees = $resultat->fetch()) {
            $circuit = new Circuit($donnees['IdentifiantCircuit'], $donnees['Descriptif'], $donnees['VilleDepart'], $donnees['PaysDepart'], $donnees['VilleArrivee'], $donnees['PaysArrivee'], $donnees['DateDepart'], $donnees['NbrPlaceDisponible'], $donnees['Duree'], $donnees['PrixInscription']);
            $listeCircuits[] = $circuit;
            }
        return $listeCircuits;
    }
}

?>