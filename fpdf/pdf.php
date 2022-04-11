<?php
require('C:\xampp\htdocs\GestStock\fpdf\fpdf.php');

class PDF extends FPDF
{
    function Header()
    { 
        $this->Image("logo.png",10,6);
        $this->Cell(276,5,"FACTURE DU CLIENT",0,0,"C");
        $this->Ln();
        $this->Cell(276,10,"GRAND YOOF",0,0,"C");
        
    }
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont("Arial",'',8);
        $this->Cell(0,10,'page'. $this->PageNo().'/{nb}');
        
    }
}
 $pdffile = new PDF();
 $pdffile->AliasNbPages();
 $pdffile->AddPage();
 $pdffile->Output();
?>