<?php
   // Inclusion du fichier contenant la définition de la classe Circuit
   require_once('Modele/Circuit.php');

   // Récupération de la liste de tous les circuits
   $listeCircuits = Circuit::getAllCircuits();
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Liste des circuits</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php
        include('header.php');
    ?>
   <div class="container">
       <h1>Liste des circuits</h1>
       <a href="CircuitView.php" class="btn btn-primary mb-3">Ajouter un circuit</a>
       <?php if (count($listeCircuits) > 0) { ?>
           <table class="table">
               <thead>
                   <tr>
                       <th>Identifiant</th>
                       <th>Descriptif</th>
                       <th>Ville de départ</th>
                       <th>Pays de départ</th>
                       <th>Ville d'arrivée</th>
                       <th>Pays d'arrivée</th>
                       <th>Date de départ</th>
                       <th>Nombre de places disponibles</th>
                       <th>Durée</th>
                       <th>Prix d'inscription</th>
                   </tr>
               </thead>
               <tbody>
                   <?php foreach ($listeCircuits as $circuit) { ?>
                       <tr>
                           <td><?php echo $circuit->getIdentifiantCircuit(); ?></td>
                           <td><?php echo $circuit->getDescriptif(); ?></td>
                           <td><?php echo $circuit->getVilleDepart(); ?></td>
                           <td><?php echo $circuit->getPaysDepart(); ?></td>
                           <td><?php echo $circuit->getVilleArrivee(); ?></td>
                           <td><?php echo $circuit->getPaysArrivee(); ?></td>
                           <td><?php echo $circuit->getDateDepart(); ?></td>
                           <td><?php echo $circuit->getNbrPlaceDisponible(); ?></td>
                           <td><?php echo $circuit->getDuree(); ?></td>
                           <td><?php echo $circuit->getPrixInscription(); ?></td>
                       </tr>
                   <?php } ?>
               </tbody>
           </table>
       <?php } else { ?>
           <p>Aucun circuit n'a été trouvé dans la base de données.</p>
       <?php } ?>
   </div>
</body>
</html>
