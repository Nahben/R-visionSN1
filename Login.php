<?php
   // Inclusion du fichier contenant la définition de la classe Utilisateur
   require_once('Modele/Utilisateur.php');

   // Vérification si le formulaire a été soumis
   if (isset($_POST['username']) && isset($_POST['password'])) {
       // Récupération des informations d'identification de l'utilisateur
       $username = $_POST['username'];
       $password = $_POST['password'];

       // Vérification des informations d'identification de l'utilisateur
       $utilisateur = Utilisateur::getUserByCredentials($username, $password);
       if ($utilisateur != null) {
           // Redirection vers la page d'accueil si les informations sont valides
           header('Location: index.php');
           exit;
       } else {
           // Affichage d'un message d'erreur si les informations sont invalides
           $messageErreur = "Nom d'utilisateur ou mot de passe invalide.";
       }
   }
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Connexion</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <div class="container">
       <h1>Connexion</h1>
       <?php if (isset($messageErreur)) { ?>
           <div class="alert alert-danger"><?php echo $messageErreur; ?></div>
       <?php } ?>
       <form method="POST">
           <div class="form-group">
               <label for="username">Nom d'utilisateur</label>
               <input type="text" class="form-control" name="username" id="username" required>
           </div>
           <div class="form-group">
               <label for="password">Mot de passe</label>
               <input type="password" class="form-control" name="password" id="password" required>
           </div>
           <button type="submit" class="btn btn-primary">Se connecter</button>
       </form>
   </div>
</body>
</html>
