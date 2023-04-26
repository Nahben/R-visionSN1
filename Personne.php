<?php
class Personne {
    private $nom;
    private $prenom;
    private $age;
    private $genre;
    private $isSmoker;

    public function __construct($nom, $prenom, $age, $genre, $smoker=15){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->genre = $genre;
        $this->isSmoker = $smoker;
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
        if($this->age >= $majorite){
            return "Il est majeur";
        }
        else{
            return "Il est mineur";
        }
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
    public function setAge($age, $supplement=0){
        $this->age = $age + $supplement;
    }
    public function setGenre($genre){
        $this->genre = $genre;
    }
    public function setIsSmocker($isSmoker){
        $this->isSmoker = $isSmoker;
    }
}
$unePersonne = new Personne("DELANNOY", "Arthur", 19, "Masculin", false);
$uneAutrePersonne = new Personne("DELANNOY", "Arthur", 19, "Masculin");
#$unePersonne->setNom("DELANNOY") ;
#$unePersonne->setPrenom("Arthur");
var_dump($unePersonne);
$unePersonne->setAge(19);
$unePersonne->setAge(19, 2);
#$unePersonne->setGenre("Masculin");
#$unePersonne->setIsSmocker(false);
var_dump($unePersonne);
var_dump($uneAutrePersonne);
echo($unePersonne->getNom());
echo($unePersonne->isAdult(18));