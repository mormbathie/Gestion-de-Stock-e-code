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
  <title>AJOUTER BON D'ENTREE</title>

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
        <?php require_once "entete.php"    ?>
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
    <?php
require_once ('../database/db.php');
?>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> BON D'ENTRE</h3>
        <!-- BASIC FORM VALIDATION -->
       <!-- <div class="row mt">
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
            </div>-->
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        <!-- FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>AJOUTER UN BON D'ENTRE</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="">
                  <div class="form-group ">
                    <label for="NUMFRS" class="control-label col-lg-2">Fournisseur</label>
                    <div class="col-lg-10">
                      <select class="form-control " id="NUMFRS" type="number" name="NUMFRS" required>

                      <?php
                      $reponse = $conn->query('SELECT * FROM `fournisseur`');
                      $reponse ->bindColumn("NUMFRS",$NUMFRS);
  
                         while ($donnee = $reponse->fetch())
                          {?> 
                            <option value="<?php echo $donnee['NUMFRS']?>">
                            <?php echo $donnee ['NUMFRS']?> <?php echo $donnee ['PRENOMFRS']?> <?php echo $donnee ['NOMFRS']?></option>
                        <?php
                        }?>
                      
                      </select>
                      <a class="btn btn-success" href="form_insertion_four.php" role="button">Ajouter Fournisseur</a>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">Date d'entr??e</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="DATEBE" type="date" name="DATEBE"/>
                    </div>
                  </div>
                 <!-- <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Your Comment (required)</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                    </div>
                  </div>-->
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10 mr-sm-2">
                      <button class="btn btn-theme">Ajouter</button>
                      <a class="btn btn-primary" href="facturation.php" role="button">Ajouter Detaille</a>                         
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
 <!--       <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Advanced Form Validations</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="get" action="">
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Firstname</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="firstname" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Lastname</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="lastname" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Username</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="username" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Password</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="password" type="password" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-2">Confirm Password</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="confirm_password" name="confirm_password" type="password" />
                    </div>
                  </div> 
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email" name="email" type="email" />
                    </div>
                  </div>
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
                      <button class="btn btn-theme" type="submit">Save</button>
                      <button class="btn btn-theme04" type="button">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>-->
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
   <!-- <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>-->
       <!-- <div class="credits">

            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
      
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="form_validation.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>-->
    <!--footer end-->
  <!-- </section>-->
  <!--js placed at the end of the document so the pages load faster-->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>-->
  <!--script for this page-->
  <script src="lib/form-validation-script.js"></script>

</body>

</html>
<?php
require_once('../database/db.php');
if(isset($_POST)){
    if (isset($_POST['NUMFRS']) && !empty($_POST['NUMFRS'])
    && isset($_POST['DATEBE']) && !empty($_POST['DATEBE']))
    {
$NUMFRS = strip_tags($_POST['NUMFRS']);
$DATEBE = strip_tags($_POST['DATEBE']);
 $sql ="INSERT INTO `be`(`NUMBE`, `NUMFRS`, `DATEBE`)
  VALUES (NULL, :NUMFRS, :DATEBE);";
$query = $conn->prepare($sql);

$query->bindValue(':NUMFRS', $NUMFRS);
$query->bindValue(':DATEBE', $DATEBE);
$query->execute();
}

}

$conn = null;
?>
