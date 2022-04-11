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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <!--------------------------Start php----------------------------->
    <?php
        require_once "../database/db.php";
        $username = $_SESSION['IDUSERS'];
        $resultats = $conn->query("SELECT * FROM users where IDUSERS = $username ");
        
      ?>
<!--------------------------end php----------------------------->
</head>
<body>
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/photo.jpg" class="img-circle" width="80"></a></p>
          <?php
        foreach($resultats as $ligne){?>

        <h5 class="centered"><?php echo $ligne["PRENOM"]." ". $ligne['NOM'];?></h5>
        <?php
        }
        ?>
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Acceuil</span>
              </a>
          </li>
          <!-- <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
              </a>
            <ul class="sub">
              <li><a href="general.html">General</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="panels.html">Panels</a></li>
              <li><a href="font_awesome.html">Font Awesome</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="grids.html">Grids</a></li>
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="todo_list.html">Todo List</a></li>
              <li><a href="dropzone.html">Dropzone File Upload</a></li>
              <li><a href="inline_editor.html">Inline Editor</a></li>
              <li><a href="file_upload.html">Multiple File Upload</a></li>
            </ul>
          </li> -->
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Autres Pages</span>
              </a>
            <ul class="sub">
              
              <li><a href="deconnexion.php">Déconexion</a></li>
              
             
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Formulaire D'ajoute</span>
              </a>
            <ul class="sub"> 
              <li><a href="form_insertion_four.php">Ajouter Fournisseur</a></li>
              <li><a href="form_insertion_prod.php">Ajouter Produit</a></li>
              <li><a href="AjoutBE.php">Ajouter Bon D'entre</a></li>
              <li><a href="AjoutBS.php">Ajouter Bon De Sorti</a></li>
              
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Liste</span>
              </a>
            <ul class="sub">
              <li><a href="ListeProduit.php">Produits</a></li>
              <li><a href="ListeFourni.php">Fournisseur</a></li>
              <li><a href="detailBS.php">Bon de Sorti</a></li>
              <li><a href="ListeBE.php">Bon D'Entree</a></li>
           
            </ul>
          </li>
          <!-- <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Morris</a></li>
              <li><a href="chartjs.html">Chartjs</a></li>
              <li><a href="flot_chart.html">Flot Charts</a></li>
              <li><a href="xchart.html">xChart</a></li>
            </ul>
          </li> -->
          <!-- <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li> -->
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    
</body>
</html>