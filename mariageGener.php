<?php

require("fpdf.php");
$pdf = new FPDF();

if(isset($_POST['log'])){
    $nfils = $_POST['nfils'];
    $pfils = $_POST['pfils'];
    $npere = $_POST['npere'];
    $nmere = $_POST['nmere'];
    $age = $_POST['age'];
    $lfils = $_POST['lfils'];
    $profils = $_POST['profils'];
    $natiofils = $_POST['natiofils'];
    $nfille = $_POST['nfille'];
    $pfille = $_POST['pfille'];
    $mfille = $_POST['mfille'];
    $agefille = $_POST['agefille'];
    $lfille = $_POST['lfille'];
    $profille = $_POST['profille'];
    $natiofille = $_POST['natiofille'];
    $localdate = date('d-m-y h:i:s');

    $pdf-> AddPage();
    $pdf->SetFont("Arial","B",19);

    $pdf->Cell(40,10,"BURKINA FASO");
    $pdf->Ln(10);
    $pdf->Cell(40,10,"Unite-Progres-Justice");
    $pdf->Ln(20);

    $pdf->Cell(190,10,"Acte DE mariage",1,1,'C');
    $pdf->Ln(15);

//pour acte de naissance on aura:

    $pdf->Cell(50,10,"Je soussigne FORGO David, certifie que:");
    //$pdf->Ln(10);

    //$pdf->Cell(50,10,"Certifie que:",0,0);

    $pdf->Ln(10);
    $pdf->Cell(50,10,"L'an:",0,0);
    $pdf->Cell(50,10,$localdate,0,1);

    $pdf->Cell(50,10,"Contracté le mariage le nommé:");
    $pdf->Ln(10);
    $pdf->Cell(50,10,"Nom:",0,0);
    $pdf->Cell(50,10,$nfils,0,1);
    $pdf->Cell(50,10,"Prenom:",0,0);
    $pdf->Cell(50,10,$pfils,0,1);
    $pdf->Cell(50,10,"Fils de:",0,0);
    $pdf->Cell(50,10,$npere,0,1);
    $pdf->Cell(50,10,"Et de:",0,0);
    $pdf->Cell(50,10,$nmere,0,1);
    $pdf->Cell(50,10,"Agé de:",0,0);
    $pdf->Cell(50,10,$age,0,1);
    $pdf->Cell(50,10,"Residant à:",0,0);
    $pdf->Cell(50,10,$lfils,0,1);
    $pdf->Cell(50,10,"Profession:",0,0);
    $pdf->Cell(50,10,$profils,0,1);
    $pdf->Cell(50,10,"De nationnalité:",0,0);
    $pdf->Cell(50,10,$natiofils,0,1);
    //$pdf->Ln(10);

    
    $pdf->Cell(50,10,"Et la nommée:",0,0);
    $pdf->Cell(50,10,$nfille,0,1);
    $pdf->Cell(50,10,"Fille de:",0,0);
    $pdf->Cell(50,10,$pfille,0,1);
    $pdf->Cell(50,10,"Et de:",0,0);
    $pdf->Cell(50,10,$mfille,0,1);
    $pdf->Cell(50,10,"Agé de:",0,0);
    $pdf->Cell(50,10,$agefille,0,1);
    $pdf->Cell(50,10,"Residant à:",0,0);
    $pdf->Cell(50,10,$lfille,0,1);
    $pdf->Cell(50,10,"Profession:",0,0);
    $pdf->Cell(50,10,$profille,0,1);
    $pdf->Cell(50,10,"De nationnalité:",0,0);
    $pdf->Cell(50,10,$natiofille,0,1);

    $pdf->Ln(10);
    $pdf->Cell(70,10,'Pour extrait conforme');
     //$pdf->Ln(10);

     $pdf->Ln(10);
     $pdf->Cell(70,10,'Delivre le:');
     $pdf->Cell(70,10,  $localdate); //put the local date her

    // echo "je suis format pdf";


    $pdf->Output();
}



?>
