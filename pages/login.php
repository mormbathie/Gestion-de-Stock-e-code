<?php
session_start();
include '../database/db.php';
    $message ="";
    if (isset($_POST["valider"])) {
        
            $login = $_POST["login"];
            $password = $_POST["password"];
            $profil = $_POST["profil"];

            $req = $conn->prepare("SELECT * FROM users WHERE LOGIN=? AND PASSWORD=? AND PROFIL=?");
            $req->execute(array($login,$password,$profil));
            $user=$req->fetch();
            $count = $req->rowCount();
            if ($count>0)
            { 
              $_SESSION['IDUSERS'] = $user['IDUSERS'];
              $_SESSION['NOM'] = $user['NOM'];
              $_SESSION['PRENOM'] = $user['PRENOM'];
    
                switch ($profil) 
                {
                    case 'Utilisateur':
                        $_SESSION["username"]=$login;
                        header('location:index.php?profile='.$_SESSION['IDUSERS']);
                        break;
                    case 'Administrateur':
                        $_SESSION["username"]=$login;
                        header("location:Admin.php");
                        break;
                    default:
                        break;
                }

            }
            else
            {
                echo "identifiant ou mot de passe incorrecte";
            }
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>LOGIN</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="POST">
        <h2 class="form-login-heading">Système d'Authentification</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" name="login" placeholder="Identifiant" autofocus>
          <br>
          <input type="password" class="form-control" name="password" placeholder="Mot de Pass">
          <br>
          <select class="form-control" name="profil" aria-label="Default select example">
            <option selected>Profile</option>
            <option value="Utilisateur">Utilisateur</option>
            <option value="Administrateur">Administrateur</option>
          </select>
          <br><br><br><br>
          <button class="btn btn-theme btn-block" name="valider" value="valider" type="submit"><i class="fa fa-lock"></i> S'authentifier</button>
          <hr>

          
          
        </div>
        <!-- Modal -->
        
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
