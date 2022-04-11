<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Recherche Produit</title>

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
  <style>
    a{
      color: #FFFFFF;
      
    }
  </style>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Résultats de Recherche</h3><br>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Liste des Prduits</h4>
                <hr>
                <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> Numéro du bon</th>
                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> Désignation</th>
                        <th><i class="fa fa-bookmark"></i> Quantité sortant</th>
                        <th><i class=" fa fa-edit"></i> Prix Unitaire</th>
                        <th><i class=" fa fa-edit"></i> Unité</th>
                    </tr>
                </thead>
                <tbody> 
                  <?php
                    require_once('conn.php');
                    if (isset($_POST['rechercher'])) 
                    {
                        $search = $_POST['chercher'];
                        $resultats = $conn->query("SELECT * FROM detaillebs WHERE NUMBS LIKE '$search%'");
                        foreach ($resultats as $ligne){
                          
                        ?>
                         <tr>
                            <td><?=$ligne['NUMBS']?></td>
                            <td><?=$ligne['NUMPRODUIT']?></td>
                            <td class="hidden-phone"><?=$ligne['QTESORTANT']?></td>
                            <td><?=$ligne['PRIXUNITAIRE']?></td>
                            <td><?=$ligne['UNITE']?></td>
                            <!--<td><span class="label label-info label-mini">Due</span></td>-->
                            <td>
                            <!-- <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button> -->
                            <button class="btn btn-primary btn-xs"><a href='ModifierP.php?code=<?=$ligne['NUMPRODUIT']?>' class ="col"><i class="fa fa-pencil"></i></a></button>
                            <button class="btn btn-danger btn-xs"><a href ='SupprimerP.php?code=<?=$ligne['NUMPRODUIT']?>' class ="col" ><i class="fa fa-trash-o"></i></a></button>
                            </td>
                        </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
                        
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
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