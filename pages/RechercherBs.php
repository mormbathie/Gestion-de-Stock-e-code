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
    <?php require_once ("entete.php"); ?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <?php require_once ("sidebar.php"); ?>
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
                <!-- Début De generer un document PDF!  -->
                <form method="GET" action="pdffile.php">
                  <h4><button class="btn btn-danger btn-xs" name="btnpdf" class ="col" ><i class="fa fa-file-pdf-o"></i></button></h4>
                  <input type="number" class="desabled" name="nombs" value="<?= $_GET['chercher'] ?> ">
                  </form>
                <!-- Fin de generer un document PDF!  -->

                

                <hr>
                <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> Numéro du bon</th>
                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> Désignation</th>
                        <th><i class="fa fa-bookmark"></i> Quantité sortant</th>
                        <th><i class=" fa fa-edit"></i> Prix Unitaire</th>
                        <th><i class=" fa fa-edit"></i> Unité</th>
                        <th><i class=" fa fa-edit"></i> TOTAL</th>
                        
                    </tr>
                </thead>
                <tbody> 
                  <?php
                    require_once('../database/db.php');
                    if (isset($_GET['rechercher'])) 
                    {
                        $search = $_GET['chercher'];
                        //$resultats = $conn->query("SELECT * FROM detaillebs WHERE NUMBS LIKE '$search%'");
                        $resultats = $conn->query("SELECT  detaillebs.NUMBS,produit.DESIGNIATION,QTESORTANT,PRIXUNITAIRE,UNITE FROM detaillebs JOIN  produit ON detaillebs.NUMPRODUIT = produit.NUMPRODUIT WHERE NUMBS LIKE '$search%' ");
                       
                        ?><?php 
                        $tab = 0; 
                        
                        
                        foreach ($resultats as $ligne){
                          //$requjoin = $conn->query("SELECT detaillebs.NUMBS,produit.DESIGNIATION,QTESORTANT,PRIXUNITAIRE,UNITE FROM detaillebs LEFT JOIN  produit ON detaillebs.NUMDBS=NUMBS");
                          
                        ?>
                         <tr>
                            <td><?=$ligne['NUMBS']?></td>
                            <td><?=$ligne['DESIGNIATION']?></td>
                            <td class="hidden-phone"><?=$ligne['QTESORTANT']?></td>
                            <td><?=$ligne['PRIXUNITAIRE']?></td>
                            <td><?=$ligne['UNITE']?></td>
                            <td><?= $ligne['PRIXUNITAIRE']*$ligne['QTESORTANT']." FCFA"?></td>
                            <!--<td><span class="label label-info label-mini">Due</span></td>-->  
                            <?php $tab = $tab+$ligne['PRIXUNITAIRE']*$ligne['QTESORTANT'];
                            
                            ?>
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
        <table class="table">
  <thead>
    <tr>
      <th scope="col">TOTAL</th>
      <th scope="col">MONTANT TOTAL : <?php echo " ".$tab." FCFA"; ?> </th>
    </tr>
  </thead>
  </table>
      </section>
     
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->

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