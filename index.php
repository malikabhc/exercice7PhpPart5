<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7/5</title>
  </head>
  <body>
    <p>
      <?php
// Création du tableau $region
        $region = array (
          '02' => 'Aisne',
          // Se lit : Index 02 associé à Aisne.
          '59' => 'Nord',
          '60' => 'Oise',
          '62' => 'Pas-de-Calais',
          '80' => 'Somme');
          //Ajouter une ligne pour le département de Reims 51.
          $region['51'] = 'Marne';
          //Afficher l'index qui vient d'être ajouté
          echo $region['51'];
      ?>
    </p>
  </body>
</html>
