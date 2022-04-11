<?php
  session_start();
	if(isset($_SESSION["username"])==null)
  {
	header("location:deconnexion.php");
	exit();
  }?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

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
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php require_once "entete.php"?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
   
      <?php require_once "sidebar.php" ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Page de Modifications</h3>
    <!--BASIC FORM VALIDATION
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Basic Validations</h4>
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">First Name</label>
                  <div class="col-lg-10">
                    <input type="text" placeholder="" id="f-name" class="form-control">
                    <p class="help-block">Successfully done</p>
                  </div>
                </div>
                <div class="form-group has-error">
                  <label class="col-lg-2 control-label">Last Name</label>
                  <div class="col-lg-10">
                    <input type="text" placeholder="" id="l-name" class="form-control">
                    <p class="help-block">Aha you gave a wrong info</p>
                  </div>
                </div>
                <div class="form-group has-warning">
                  <label class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-10">
                    <input type="email" placeholder="" id="email2" class="form-control">
                    <p class="help-block">Something went wrong</p>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
         /form-panel 
          </div>
          /col-lg-12 
        </div>
       /row 
         FORM VALIDATION 
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Form Validations</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Name (required)</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="name" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">E-Mail (required)</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cemail" type="email" name="email" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">URL (optional)</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="curl" type="url" name="url" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Your Comment (required)</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Save</button>
                      <button class="btn btn-theme04" type="button">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
             /form-panel 
          </div>
           /col-lg-12 
        </div>
         /row -->
      <?php  
      include '../database/db.php';
    //include 'ListeProduit.php';
     if (isset($_GET['code']))
    {
        $code = $_GET['code'];
        $req= "SELECT * FROM fournisseur WHERE NUMFRS = '$code'";
        $resultats = $conn->prepare($req);
        $resultats ->execute();
        $infos = $resultats->fetch();
        $conn=null;
      ?>
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>Modification de Fournisseur</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="ModifierF.php">
                  <div class="form-group ">
                    <label for="code" class="control-label col-lg-2">CODE FOURNISSEUR</label>
                    <div class="col-lg-10">
                      <input class=" form-control " id="code" name="code" type="number" value="<?=$infos['NUMFRS']?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="nom" class="control-label col-lg-2">NOM</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nom" name="nom" type="text" value="<?=$infos['NOMFRS']?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="prenom" class="control-label col-lg-2">PRENOM</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="prenom" name="prenom" type="text" value="<?=$infos['PRENOMFRS']?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="adresse" class="control-label col-lg-2">ADRESSE</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="adresse" name="adresse" type="text" value="<?=$infos['ADRESSFRS']?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="tel" class="control-label col-lg-2">TELEPHONE</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="tel" name="tel" type="text" value="<?=$infos['TELFRS']?>" />
                    </div>
                  </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="modifier" value="modifier">Modifier</button>
                      <button class="btn btn-theme04" type="button" name="annuler" value="annuler">Annuler</button>
                    </div>
                  </div>
                  <?php
                  }
                  ?>
                  <?php
                  if (isset($_POST['modifier'])) 
                  {
                      $code = $_POST['code'];
                      $nom = $_POST['nom'];
                      $prenom = $_POST['prenom'];
                      $adresse = $_POST['adresse'];
                      $tel = $_POST['tel'];
                      include '../database/db.php';
                          $code = $_POST['code'];
                          $req= "UPDATE fournisseur SET 	NUMFRS = '$code', NOMFRS = '$nom', PRENOMFRS = '$prenom', ADRESSFRS = '$adresse', TELFRS = '$tel' WHERE NUMFRS = '$code'";
                          $resultats=$conn->prepare($req);
                          $resultats ->execute();
                          if ($resultats)
                          {
                              echo "Mise A jour Reussie";
                             
                          }else
                          {
                              echo("erreur Mise A jour");
                          }
                  }
                  else
                  {
                      echo "Modiffication en cours...";
                  }
                  $conn=null;
              
                  ?>  
                  <!--
                  <div class="form-group ">
                    <label for="agree" class="control-label col-lg-2 col-sm-3">Agree to Our Policy</label>
                    <div class="col-lg-10 col-sm-9">
                      <input type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Receive the Newsletter</label>
                    <div class="col-lg-10 col-sm-9">
                      <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="newsletter" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" value="sauvegarder">Sauvegarder</button>
                      <button class="btn btn-theme04" type="button" value="annuler">Annuler</button>
                    </div>
                  </div>-->
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="form_validation.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/form-validation-script.js"></script>

</body>

</html>
