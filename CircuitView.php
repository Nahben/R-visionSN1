<?php
   // Inclusion du fichier contenant la définition de la classe Circuit
   require_once('Circuit.php');

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       // Récupération des valeurs du formulaire
       $descriptif = $_POST['descriptif'];
       $villeDepart = $_POST['villeDepart'];
       $paysDepart = $_POST['paysDepart'];
       $villeArrivee = $_POST['villeArrivee'];
       $paysArrivee = $_POST['paysArrivee'];
       $dateDepart = date('Y-m-d H:i:s', strtotime($_POST['dateDepart']));
       $nbrPlaceDisponible = $_POST['nbrPlaceDisponible'];
       $duree = $_POST['duree'];
       $prixInscription = $_POST['prixInscription'];

       // Création d'un nouvel objet Circuit
       $nouveauCircuit = new Circuit(null, $descriptif, $villeDepart, $paysDepart, $villeArrivee, $paysArrivee, $dateDepart, $nbrPlaceDisponible, $duree, $prixInscription);

       // Insertion du nouvel objet Circuit dans la base de données
       $nouveauCircuit->insertIntoDatabase();

       // Redirection vers une page de confirmation
       header('Location: confirmation.php');
       exit();
   }
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Ajout d'un circuit</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <div class="container">
       <h1>Ajout d'un circuit</h1>
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
           <div class="form-group">
               <label for="descriptif">Descriptif :</label>
               <input type="text" class="form-control" name="descriptif" id="descriptif" required>
           </div>
           <div class="form-group">
               <label for="villeDepart">Ville de départ :</label>
               <input type="text" class="form-control" name="villeDepart" id="villeDepart" required>
           </div>
           <div class="form-group">
               <label for="paysDepart">Pays de départ :</label>
               <input type="text" class="form-control" name="paysDepart" id="paysDepart" required>
           </div>
           <div class="form-group">
               <label for="villeArrivee">Ville d'arrivée :</label>
               <input type="text" class="form-control" name="villeArrivee" id="villeArrivee" required>
           </div>
           <div class="form-group">
               <label for="paysArrivee">Pays d'arrivée :</label>
               <input type="text" class="form-control" name="paysArrivee" id="paysArrivee" required>
           </div>
           <div class="form-group">
               <label for="dateDepart">Date de départ :</label>
               <input type="datetime-local" class="form-control" name="dateDepart" id="dateDepart" required>
           </div>
           <div class="form-group">
               <label for="nbrPlaceDisponible">Nombre de places disponibles :</label>
               <input type="number" class="form-control" name="nbrPlaceDisponible" id="nbrPlaceDisponible" min="1" required>
           </div>
           <div class="form-group">
               <label for="duree">Durée :</label>
               <input type="number" class="form-control" name="duree" id="duree" min="1" required>
           </div>
           <div class="form-group">
               <label for="prixInscription">Prix d'inscription :</label>
               <input type="number" class="form-control" name="prixInscription" id="prixInscription" step="0.01" min="0" required>
           </div>
           <button type="submit" class="btn btn-primary">Ajouter</button>
       </form>
   </div>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965Dz
