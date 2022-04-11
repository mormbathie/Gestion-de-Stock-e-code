<!DOCTYPE html>
<html>
    <head>
        <style>
           
            table{
                width: 100%;
                caption-side: bottom;
            }
            th, td{
            border: 1px solid black;
            padding: 10px;
            }
            caption{
            background-color: #0AD;
            font-weight: bold;
            }
            .tot{
                background-color: aqua;
            }
            .imgb{
              width: 10%;
            }
        </style>

    </head>
<body>
  <img src="img/logo.png " class="imgb">
    
    <center>
        <h1>FACTURE N°</h1>
    </center>
        
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover" border="1px">
                <!-- <h4><i class="fa fa-angle-right"></i> Liste des Prduits</h4> -->
                
               
             
                <thead >
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> DESIGIATION</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> QUANTITE SORTANT</th>
                    <th><i class="fa fa-bookmark"></i> PRIX UNITAIRE</th>      
                    <th><i class="fa fa-bookmark"></i> TOTAL</th>
                        
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $tab = 0;
                    foreach ($resultats as $ligne){
                        
                  ?>
                  <tr>
                    <td><?=$ligne['DESIGNIATION']?></td>
                    <td class="hidden-phone"><?=$ligne['QTESORTANT']?></td>
                    <td><?=$ligne['PRIXUNITAIRE']?></td>
                    <td><?=$ligne['PRIXUNITAIRE']*$ligne['QTESORTANT']." FCFA"?></td>
                    <!--<td><span class="label label-info label-mini">Due</span></td>-->
                    <?php $tab = $tab+$ligne['PRIXUNITAIRE']*$ligne['QTESORTANT'];?>
                  </tr>
                  <?php 
                    }
                    
                  ?>
                  
                  
                </tbody>
                <caption>Info utilisateurs</caption>
              </table>
            </div>
            <div>
                        <table class="tot">
                            <th>PRIX TOTAL : <?= $tab ?></th>
                        </table>
            </div>

           
</body>

</html>