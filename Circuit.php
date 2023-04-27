<?php
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
}

?>