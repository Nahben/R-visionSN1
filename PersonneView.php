<?php
   // Inclusion du fichier contenant la définition de la classe Circuit
   require_once('Modele/Personne.php');

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       // Récupération des valeurs du formulaire
       $nom = $_POST['nom'];
       $prenom = $_POST['prenom'];
       $email = $_POST['email'];
       $dateNaissance = $_POST['dateNaissance'];

       // Création d'un nouvel objet Circuit
       $nouveauPersonne = new Personne(null, $nom, $prenom, $email, $dateNaissance);

       // Insertion du nouvel objet Circuit dans la base de données
       $nouveauPersonne->insertIntoDB();

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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php
        include('header.php');
    ?>
   <div class="container">
       <h1>Ajout d'un circuit</h1>
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
           <div class="form-group">
               <label for="nom">Nom :</label>
               <input type="text" class="form-control" name="nom" id="nom" required>
           </div>
           <div class="form-group">
               <label for="prenom">Prénom :</label>
               <input type="text" class="form-control" name="prenom" id="prenom" required>
           </div>
           <div class="form-group">
               <label for="email">Email :</label>
               <input type="text" class="form-control" name="email" id="email" required>
           </div>
           <div class="form-group">
               <label for="dateNaissance">Date de naissance :</label>
               <input type="datetime-local" class="form-control" name="dateNaissance" id="dateNaissance" required>
           </div>
           <button type="submit" class="btn btn-primary">Ajouter</button>
       </form>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>