<?php
   // Inclure le fichier de configuration et la définition de la classe Utilisateur
   require_once('Modele/Utilisateur.php');

   // Vérifier si l'utilisateur est connecté
   session_start();
   $utilisateurConnecte = null;
   if (isset($_SESSION['idUtilisateur'])) {
       $utilisateurConnecte = Utilisateur::getUserById($_SESSION['idUtilisateur']);
   }
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Accueil</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <div class="container">
       <h1>Page d'accueil</h1>
       <?php if ($utilisateurConnecte != null) { ?>
           <p>Bienvenue, <?php echo $utilisateurConnecte->getNomUtilisateur(); ?> !</p>
           <a href="logout.php" class="btn btn-danger">Se déconnecter</a>
       <?php } else { ?>
           <p>Veuillez vous connecter pour accéder à votre espace personnel.</p>
           <a href="login.php" class="btn btn-primary">Se connecter</a>
       <?php } ?>
   </div>
</body>
</html>
