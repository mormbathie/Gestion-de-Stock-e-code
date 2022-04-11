 <?php
    try {
    $conn = new PDO ("mysql:host=localhost;dbname=gesstock","root","");
    
    } catch (PDOException $erreur) {
        die("acces refuser : ".$erreur->getMessage());
    }
 ?>