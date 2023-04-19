<?php

require("fpdf.php");
$pdf = new FPDF();

if(isset($_POST['log'])){
    $nom = $_POST['nom'];
    $pnom = $_POST['prenom'];
    $date = $_POST['date'];
    $lieu = $_POST['lieu'];
    $date_dec = $_POST['date_dec'];
    $lieu_dec = $_POST['lieu_dec'];
    $type = $_POST['type_dec'];
    $localdate = date('d-m-y h:i:s');

    $pdf-> AddPage();
    $pdf->SetFont("Arial","B",19);

    $pdf->Cell(40,10,"BURKINA FASO");
    $pdf->Ln(10);
    $pdf->Cell(40,10,"Unite-Progres-Justice");
    $pdf->Ln(20);

    $pdf->Cell(190,10,"Acte DE DECES",1,1,'C');
    $pdf->Ln(15);

//pour acte de naissance on aura:

    $pdf->Cell(50,10,"Je soussigne FORGO David,");
    $pdf->Ln(10);

    $pdf->Cell(50,10,"Certifie que:",0,0);

    $pdf->Ln(10);

    $pdf->Cell(50,10,"Nom:",0,0);
    $pdf->Cell(50,10,$nom,0,1);
    $pdf->Cell(50,10,"Prenom:",0,0);
    $pdf->Cell(50,10,$pnom,0,1);
    //$pdf->Ln(10);

    $pdf->Cell(50,10,"Ne(e) le:",0,0);
    $pdf->Cell(50,10,$date,0,1);
    //$pdf->Ln(10);

    $pdf->Cell(50,10,"A:",0,0);
    $pdf->Cell(50,10,$lieu,0,1);
    //$pdf->Ln(10);

    $pdf->Cell(50,10,"Est decede le:",0,0);
    $pdf->Cell(50,10,$date_dec,0,1);
    //$pdf->Ln(10);

    $pdf->Cell(50,10,"A:",0,0);
    $pdf->Cell(50,10,$lieu_dec,0,1);
    //$pdf->Ln(20);
    $pdf->Cell(50,10,"De mort:",0,0);
    $pdf->Cell(50,10,$type,0,1);

    $pdf->Cell(70,10,'Ce certificat pour sevir et valoir ce que de droit');
     //$pdf->Ln(10);

     $pdf->Ln(20);
     $pdf->Cell(70,10,'Delivre le:');
     $pdf->Cell(70,10, $localdate); //put the local date her

    // echo "je suis format pdf";


    $pdf->Output();
}



?>
