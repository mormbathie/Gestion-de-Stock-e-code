<?php
//on inclut la connection a la base
  require_once ('database/db.php');
      $sql = 'SELECT * FROM `produit`';
      $query=$conn->prepare($sql);
      $query->execute();
      $result= $query->fetchAll(PDO::FETCH_ASSOC);
   require_once('close.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTE DES PRODUITS</title>
    <style>
      table, th, td {
      padding: 5px;
      border: 1px solid black;
      border-collapse: collapse;
      } 
    </style>
</head>
<body>
  <H1>LISTE DES PRODUITS</H1>
            <table>
    <thead>
           <th>Code de produits</th>
            <th>Designation</th>
            <th>Quantite en Stocks</th>
            <th>Seuil Minimal</th>
            <th>Seuil Maximal</th>
            <th>Date de Predemption</th>
            <th colspan="2">ACTIONS</th>
    </thead>
    <tbody>
    <?php
    foreach($result as $produit) {
    ?>
    <tr>
        <td><?=$produit['NUMPRODUIT'] ?></td>
        <td><?=$produit['DESIGNATION'] ?></td>
        <td><?=$produit['QTESTOCK'] ?></td>
        <td><?=$produit['SEUILMIN'] ?></td>
        <td><?=$produit['SEUILMAX'] ?></td>
        <td><?=$produit['DATEPEREMPTION'] ?></td>
        <td>
       <button><a href="modifier.php?id=<?=$produit['id'] ?>">Modifier</a></button>
        <button><a href="supprimer.php?id=<?=$produit['id'] ?>">Supprimer</a></td></button>
    </tr>
    <?php
    }
    ?>
    </tbody>
    </table><br>
    <button><a href="insertion.php">Ajouter</a></button>
</body>
</html>