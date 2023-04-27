<?php
   require_once('Modele/Utilisateur.php');

   // Vérifier si le formulaire a été soumis
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       // Récupérer les données du formulaire
       $nomUtilisateur = $_POST['nomUtilisateur'];
       $motDePasse = $_POST['motDePasse'];
       $email = $_POST['email'];

       // Créer un nouvel objet Utilisateur avec les données du formulaire
       $utilisateur = new Utilisateur(null, $nomUtilisateur, $motDePasse, $email);

       // Ajouter l'utilisateur à la base de données
       $utilisateur->insertIntoDB();

       // Rediriger vers la page de confirmation
       header('Location: confirmation.php?id=' . $utilisateur->getIdUtilisateur());
       exit();
   }
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Ajout utilisateur</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <div class="container">
       <h1>Ajout utilisateur</h1>
       <form method="post">
           <div class="form-group">
               <label for="nomUtilisateur">Nom d'utilisateur :</label>
               <input type="text" class="form-control" id="nomUtilisateur" name="nomUtilisateur" required>
           </div>
           <div class="form-group">
               <label for="motDePasse">Mot de passe :</label>
               <input type="password" class="form-control" id="motDePasse" name="motDePasse" required>
           </div>
           <div class="form-group">
               <label for="email">Adresse e-mail :</label>
               <input type="email" class="form-control" id="email" name="email" required>
           </div>
           <button type="submit" class="btn btn-primary">Ajouter</button>
       </form>
   </div>
</body>
</html>
