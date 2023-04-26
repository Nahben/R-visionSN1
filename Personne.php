<?php
class Personne {
    public $nom;
    public $prenom;
    public $age;
    public $genre;
    public $isSmoker;

    public function smoker(){
        if($this->isSmoker){
            return "Il fume";
        }
        else{
            return "Il ne fume pas";
        }
    }
}
$unePersonne = new Personne;
$unePersonne->nom = "DELANNOY";
$unePersonne->prenom = "Arthur";
$unePersonne->age = 19;
$unePersonne->genre = "Masculin";
$unePersonne->isSmoker = false;
var_dump($unePersonne->smoker());