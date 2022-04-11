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
   <?php require_once "sidebar.php"?>
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
            <h3><i class="fa fa-angle-right"></i>Detail bon d'entre</h3>
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
                <h4><i class="fa fa-angle-right"></i>AJOUTER UN PRODUIT DU BON D'ENTRE</h4>
                <div class="form-panel">
                  <div class=" form">
                    <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="">

                    <div class="form-group ">
                        <label for="NUMBE" class="control-label col-lg-2">Numero et date du bon d'entrée</label>
                        <div class="col-lg-10">
                          <select class="form-control " id="NUMBE" type="number" name="NUMBE" required>
    
                          <?php
                          $reponse = $conn->query('SELECT * FROM `be`');
                          $reponse ->bindColumn("NUMBE",$NUMBE);
      
                             while ($donnee = $reponse->fetch())
                              {?> 
                                <option value="<?php echo $donnee['NUMBE']?>">
                                <?php echo $donnee ['NUMBE']." entré le "?>
                                <?php echo $donnee ['DATEBE']?>
                              </option>
                            <?php
                            }?>
    
                          </select>
                        </div>
                      </div>

                      <div class="form-group ">
                        <label for="NUMPRODUIT" class="control-label col-lg-2">Produit</label>
                        <div class="col-lg-10">
                          <select class="form-control " id="NUMPRODUIT" type="text" name="NUMPRODUIT" required>
    
                          <?php
                          $reponse = $conn->query('SELECT * FROM `produit`');
                          $reponse ->bindColumn("NUMPRODUIT",$NUMPRODUIT);
      
                             while ($donnee = $reponse->fetch())
                              {?> 
                                <option value="<?php echo $donnee['NUMPRODUIT']?>">
                                <?php echo $donnee ['DESIGNIATION']?></option>
                            <?php
                            }?>
    
                          </select>
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="QTEENTREE" class="control-label col-lg-2">Qauntité</label>
                        <div class="col-lg-10">
                          <input class="form-control " id="QTEENTREE" type="number" name="QTEENTREE"/>
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="UNITE" class="control-label col-lg-2">Unité</label>
                        <div class="col-lg-10">
                          <input class="form-control " id="UNITE" type="text" name="UNITE"/>
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="PRIXUNIT" class="control-label col-lg-2">Prix Unitaire</label>
                        <div class="col-lg-10">
                          <input class="form-control " id="PRIXUNIT" type="number" name="PRIXUNIT"/>
                        </div>
                      </div>
                     <!-- <div class="form-group ">
                        <label for="ccomment" class="control-label col-lg-2">Your Comment (required)</label>
                        <div class="col-lg-10">
                          <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                        </div>
                      </div>-->
                      <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                          <button class="btn btn-theme" type="submit" name="ajouter" value="ajouter">Ajouter</button>
                          <button class="btn btn-theme04" type="button">Annuler</button>
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
      <!-- js placed at the end of the document so the pages load faster -->
     <!-- <script src="lib/jquery/jquery.min.js"></script>
      <script src="lib/bootstrap/js/bootstrap.min.js"></script>
      <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
      <script src="lib/jquery.scrollTo.min.js"></script>
      <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>-->
      <!--common script for all pages-->
    








    <section id="main-content">
      <section class="wrapper">
       <!-- <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Basic Table</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>-->
           <!--/col-md-12 -->
         <!-- <div class="col-md-12 mt">
            <div class="content-panel">
              <table class="table table-hover">
                <h4><i class="fa fa-angle-right"></i> Hover Table</h4>
                <hr>
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Simon</td>
                    <td>Mosa</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>-->
          <!-- /col-md-12 -->
       <!-- </div>-->
        <!-- row 
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Detail Bon d'entré</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Produit</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Qauntité</th>
                    <th><i class="fa fa-bookmark"></i> unité</th>
                    <th><i class=" fa fa-edit"></i> Prix Unitaire</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a href="basic_table.html#">Company Ltd</a>
                    </td>
                    <td class="hidden-phone">Lorem Ipsum dolor</td>
                    <td>12000.00$ </td>
                    <td><span class="label label-info label-mini">Due</span></td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="basic_table.html#">
                        Dashio co
                        </a>
                    </td>
                    <td class="hidden-phone">Lorem Ipsum dolor</td>
                    <td>17900.00$ </td>
                    <td><span class="label label-warning label-mini">Due</span></td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="basic_table.html#">
                        Another Co
                        </a>
                    </td>
                    <td class="hidden-phone">Lorem Ipsum dolor</td>
                    <td>14400.00$ </td>
                    <td><span class="label label-success label-mini">Paid</span></td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="basic_table.html#">Dashio ext</a>
                    </td>
                    <td class="hidden-phone">Lorem Ipsum dolor</td>
                    <td>22000.50$ </td>
                    <td><span class="label label-success label-mini">Paid</span></td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="basic_table.html#">Total Ltd</a>
                    </td>
                    <td class="hidden-phone">Lorem Ipsum dolor</td>
                    <td>12120.00$ </td>
                    <td><span class="label label-warning label-mini">Due</span></td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
           /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>-->
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
        <a href="basic_table.html#" class="go-top">
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
  
</body>

</html>
<?php
require_once('../database/db.php');
if(isset($_POST)){
    if (isset($_POST['NUMBE']) && !empty($_POST['NUMBE'])
    && isset($_POST['NUMPRODUIT']) && !empty($_POST['NUMPRODUIT'])
    && isset($_POST['QTEENTREE']) && !empty($_POST['QTEENTREE'])
    && isset($_POST['UNITE']) && !empty($_POST['UNITE'])
    && isset($_POST['PRIXUNIT']) && !empty($_POST['PRIXUNIT']))
    {
$NUMBE = strip_tags($_POST['NUMBE']);
$NUMPRODUIT = strip_tags($_POST['NUMPRODUIT']);
$QTEENTREE= strip_tags($_POST['QTEENTREE']);
$UNITE = strip_tags($_POST['UNITE']);
$PRIXUNIT = strip_tags($_POST['PRIXUNIT']);
 $sql ="INSERT INTO `detaillebe`(`NUMDETAIL`,`NUMBE`, `NUMPRODUIT`, `QTEENTREE`,`UNITE`,`PRIXUNIT`)
  VALUES (NULL, :NUMBE, :NUMPRODUIT, :QTEENTREE, :UNITE, :PRIXUNIT);";
$query = $conn->prepare($sql);

$query->bindValue(':NUMBE', $NUMBE);
$query->bindValue(':NUMPRODUIT', $NUMPRODUIT);
$query->bindValue(':QTEENTREE', $QTEENTREE);
$query->bindValue(':UNITE', $UNITE);
$query->bindValue(':PRIXUNIT', $PRIXUNIT);

$query->execute();

/*$test = $conn->query('SELECT QTESTOCK FROM `produit` WHERE `NUMPRODUIT`=$NUMPRODUIT;');


$QTF = $test+$query->QTEENTREE;

  $req = "UPDATE `produit` SET `QTESTOCK`= :QTF
  WHERE `NUMPRODUIT`=$NUMPRODUIT;";

$query = $conn->prepare($req);
$query->bindValue(':QTF', $QTF);
$query->execute();*/

}
}
$conn = null;
?>

