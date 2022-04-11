<?php
 use Dompdf\Dompdf;
require_once "../database/db.php";
if(isset($_GET['btnpdf'])){
    $res = $_GET['nombs'];
    $resultats = $conn->query("SELECT  detaillebs.NUMBS,produit.DESIGNIATION,QTESORTANT,PRIXUNITAIRE,UNITE FROM detaillebs JOIN  produit ON detaillebs.NUMPRODUIT = produit.NUMPRODUIT where NUMBS = $res ");
   ob_start();
    require_once 'pdfcontent.php';
    $html = ob_get_contents();
    ob_clean();
require_once "../dompdf/autoload.inc.php";
$MonPdf = new Dompdf();
$MonPdf->loadHtml($html);
$MonPdf->render();
$fichier = 'Facture ';
$MonPdf->stream($fichier);
}


?>
