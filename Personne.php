<?php
class Personne {
    private $nom;
    private $prenom;
    private $age;
    private $genre;
    private $isSmoker;

    public function __construct($nom, $prenom, $age, $genre, $smoker){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->genre = $genre;
        $this->isSmoker = $smoker;
    }

    public function Personne($nom, $prenom, $age, $genre){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->genre = $genre;
    }

    public function smoker(){
        if($this->isSmoker){
            return "Il fume";
        }
        else{
            return "Il ne fume pas";
        }
    }

    public function isAdult($majorite){
        
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
    public function setAge($age){
        $this->age = $age;
    }
    public function setGenre($genre){
        $this->genre = $genre;
    }
    public function setIsSmocker($isSmoker){
        $this->isSmoker = $isSmoker;
    }
}
$unePersonne = new Personne("DELANNOY", "Arthur", 19, "Masculin", false);
$unePersonne = new Personne("DELANNOY", "Arthur", 19, "Masculin");
#$unePersonne->setNom("DELANNOY") ;
#$unePersonne->setPrenom("Arthur");
#$unePersonne->setAge(19);
#$unePersonne->setGenre("Masculin");
#$unePersonne->setIsSmocker(false);
var_dump($unePersonne);
echo($unePersonne->getNom());