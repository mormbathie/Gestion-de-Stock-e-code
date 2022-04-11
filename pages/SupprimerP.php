<?php
  session_start();
	if(isset($_SESSION["username"])==null)
  {
	header("location:deconnexion.php");
	exit();
  }?>
<?php
    $redirection=header("location: ListeProduit.php");
		include '../database/db.php';
        //include 'ListeProduit.php';
		if (isset($_GET['code'])) {
			$code = $_GET['code'];
			$req= "DELETE FROM produit WHERE numproduit = '$code'";
            $resultats = $conn->prepare($req);
            $resultats ->execute();
            if($resultats)
            {
                echo $redirection;
            }
            else
            {
                echo 'error';
            }
			$conn=null;
        }
?>