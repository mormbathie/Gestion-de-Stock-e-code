<?php
  session_start();
	if(isset($_SESSION["username"])==null)
  {
	header("location:deconnexion.php");
	exit();
  }?>
<?php
    $redirection=header("location: ListeFourni.php");
		include '../database/db.php';
        //include 'ListeProduit.php';
		if (isset($_GET['code'])) {
			$code = $_GET['code'];
			$req= "DELETE FROM fournisseur WHERE NUMFRS = '$code'";
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