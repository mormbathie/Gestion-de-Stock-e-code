
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJOUTER PRODUITS</title>
    <!--------------------------Start php----------------------------->
    <?php
        require_once "../database/db.php";
        $username = $_SESSION['IDUSERS'];
        $resultats = $conn->query("SELECT * FROM users where IDUSERS = $username ");
        
      ?>
<!--------------------------end php----------------------------->
</head>

<body>
    
<?php
require_once('../database/db.php');
    if(isset($_POST)){
        ?>
        <script type="text/javascript">
        document.getElementById("fromins").addEventListener("submit",function(){
            alert ('Formulaire Envoyé ');
        })

        </script>
        <?php
        
        if (isset($_POST['DESIGNATION']) && !empty($_POST['DESIGNATION'])
        &&  isset($_POST['QTESTOCK']) && !empty($_POST['QTESTOCK'])
        &&  isset($_POST['SEUILMIN']) && !empty($_POST['SEUILMIN'])
        &&  isset($_POST['SEUILMAX']) && !empty($_POST['SEUILMAX'])
        &&  isset($_POST['DATEPEREMPTION']) && !empty($_POST['DATEPEREMPTION'])
        && $_POST['SEUILMIN'] < $_POST['SEUILMAX']
        )
        { 
        $DESIGNATION = strip_tags($_POST['DESIGNATION']);
        $QTESTOCK = strip_tags($_POST['QTESTOCK']);
        $SEUILMIN = strip_tags($_POST['SEUILMIN']);
        $SEUILMAX = strip_tags($_POST['SEUILMAX']);
        $DATEPEREMPTION = strip_tags($_POST['DATEPEREMPTION']);
     

        $sql = "INSERT INTO `produit` VALUES(null ,:DESIGNATION, :QTESTOCK, :SEUILMIN, :SEUILMAX, :DATEPEREMPTION)";
        $query = $conn->prepare($sql);

        $query->bindValue(':DESIGNATION', $DESIGNATION);
        $query->bindValue(':QTESTOCK', $QTESTOCK);
        $query->bindValue(':SEUILMIN', $SEUILMIN);
        $query->bindValue(':SEUILMAX', $SEUILMAX);
        $query->bindValue(':DATEPEREMPTION', $DATEPEREMPTION);
        $query->execute();
        header("location:../pages/form_insertion_prod.php");

   
}
}else{
    header("location:../pages/form_insertion_prod.php");
    echo 'errur';
}
require_once('../database/close.php');


/* page fournisseur 
--------------------------------------------------------------------------------
*/
require_once('../database/db.php');
    if(isset($_POST)){
        if (isset($_POST['NOMFRS']) && !empty($_POST['NOMFRS'])
        &&  isset($_POST['PRENOMFRS']) && !empty($_POST['PRENOMFRS'])
        &&  isset($_POST['ADRESSFRS']) && !empty($_POST['ADRESSFRS'])
        &&  isset($_POST['TELFRS']) && !empty($_POST['TELFRS'])
       )
    {
        $NOMFRS = strip_tags($_POST['NOMFRS']);
        $PRENOMFRS = strip_tags($_POST['PRENOMFRS']);
        $ADRESSFRS = strip_tags($_POST['ADRESSFRS']);
        $TELFRS = strip_tags($_POST['TELFRS']);
        $sql_four = "INSERT INTO `fournisseur` VALUES(null ,:NOMFRS, :PRENOMFRS, :ADRESSFRS, :TELFRS)";
        $query_four = $conn->prepare($sql_four);

        $query_four->bindValue(':NOMFRS', $NOMFRS);
        $query_four->bindValue(':PRENOMFRS', $PRENOMFRS);
        $query_four->bindValue(':ADRESSFRS', $ADRESSFRS);
        $query_four->bindValue(':TELFRS', $TELFRS);
        $query_four->execute();
        
            
            header("location:../pages/form_insertion_four.php");
        
        

    }
}
require_once('../database/close.php');

?>
</body>
</html>