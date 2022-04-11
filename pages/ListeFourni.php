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
  <script type="text/javascript" src="script/script.js"></script>  
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
    <?php require_once "entete.php"?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    
    <?php  require_once "sidebar.php" ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
       <!-- <h3><i class="fa fa-angle-right"></i> Basic Table Examples</h3>
        <div class="row">
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
          </div>
          /col-md-12 
          <div class="col-md-12 mt">
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
          </div>
         /col-md-12 -->
        </div>
        <!-- row -->





        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Liste des Fournisseur</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Code Fournisseur</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Nom</th>
                    <th><i class="fa fa-bookmark"></i> Prenom</th>
                    <th><i class=" fa fa-edit"></i> Adresse</th>
                    <th><i class=" fa fa-edit"></i> Telephone</th>
                    <th><i class=" fa fa-edit"></i>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include '../database/db.php';
                    $resultats = $conn->query("SELECT * FROM fournisseur");
                    foreach ($resultats as $ligne){
                  ?>
                  <tr>
                    <td><?=$ligne['NUMFRS']?></td>
                    <td class="hidden-phone"><?=$ligne['NOMFRS']?></td>
                    <td><?=$ligne['PRENOMFRS']?></td>
                    <td><?=$ligne['ADRESSFRS']?></td>
                    <td><?=$ligne['TELFRS']?></td>
                    <!--<td><span class="label label-info label-mini">Due</span></td>-->
                    <td>
                     <!-- <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button> -->
                     <a class = "btn btn-primary btn-xs" href='ModifierF.php?code=<?=$ligne["NUMFRS"]?>' class ="col" ><i class="fa fa-pencil"></i></a>
                     <a class = "btn btn-danger btn-xs"  href ='SupprimerF.php?code=<?=$ligne["NUMFRS"]?>' class ="col"></button><i class="fa fa-trash-o"></i></a>
                      
                    </td>
                  </tr>
                  <?php
                    }
                  ?>

                  <!-------------------------START------------------------------->
                  <style>
    .body {
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    

    .modal-container {
      z-index: 9999;
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: none;
      align-items: center;
      justify-content: center;
    }

    .modal-open {
      display: flex;
    }

    .modal {
      max-width: 700px;
      max-height: 400px;
      background-color: white;
      border-radius: 3px;
    }

    .modal-button {
      text-transform: uppercase;
      padding: 0.5em 1em;
      border: none;
      color: #fff;
      background-color: rgba(0, 0, 0, 0.5);
      border-radius: 3px;
      margin-left: 0.5em;
    }

    .modal-confirm-button {
      background-color: tomato;
    }

    .modal-header {
      background-color: rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
    }

    .modal-header h2 {
      margin: 1em;
    }

    .modal-header span {
      padding-right: 0.3em;
      cursor: default;
      align-self: flex-end;
    }

    .modal-content {
      padding: 1em;
      flex-grow: 1;
    }

    .modal-footer {
      padding: 1em;
      background-color: rgba(0, 0, 0, 0.05);
      display: flex;
      justify-content: flex-end;
    }

    .close-button {
      border: none;
      text-align: center;
      cursor: pointer;
      white-space: nowrap;
    }
  </style>
  <script>
    function onDelete() {
      let confirmation = document.getElementById("confirmation");
      if (!confirmation.classList.contains("modal-open")) {
        confirmation.classList.add("modal-open");
      }
    }

    function onCancel() {
      let confirmation = document.getElementById("confirmation");
      confirmation.classList.remove("modal-open");
    }

    function onConfirm() {
      onCancel();
    }

    document.addEventListener("DOMContentLoaded", () => {
      document
        .getElementById("confirmation")
        .addEventListener("click", onCancel);
      document
        .querySelector(".modal")
        .addEventListener("click", (e) => e.stopPropagation());
    });
  </script>
  <body class="body">
    
    <div id="confirmation" class="modal-container">
      <div class="modal">
        <section>
          <header class="modal-header">
            <span onclick="onCancel()">&times;</span>
            <h2>Are you sure you want to delete?</h2>
          </header>
          <section class="modal-content">
            <p>This action cannot be undone</p>
          </section>
          <footer class="modal-footer">
            <button class="modal-button" onclick="onCancel()">Cancel</button>
            <button
              class="modal-button modal-confirm-button"
              onclick="onConfirm()"
            >
              Confirm
            </button>
          </footer>
        </section>
      </div>
    </div>

                  <!-------------------------END------------------------------->
                  <!--
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
                      <button class="btn btn-primary btn-xs"></button>
                      <button class="btn btn-danger btn-xs"></button>
                    </td>
                  </tr> -->
                  <!--
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
                  </tr> -->
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
    <!-- <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="basic_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer> -->
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
