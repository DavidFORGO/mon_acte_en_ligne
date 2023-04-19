<?php

require("fpdf.php");
$pdf = new FPDF();

if(isset($_POST['create'])){
    $nom = $_POST['nom'];
    $pnom = $_POST['pnom'];
    $date = $_POST['dateN'];
    $lieu = $_POST['lieuN'];
    $nomP = $_POST['nomP'];
    $nomM = $_POST['nomM'];

    $pdf-> AddPage();
    $pdf->SetFont("Arial","B",19);

    $pdf->Cell(40,10,"BURKINA FASO");
    $pdf->Ln(10);
    $pdf->Cell(40,10,"Unité-Progrès-Justice");
    $pdf->Ln(20);

    $pdf->Cell(190,10,"Extrait d'acte de naissance",1,1,'C');
    $pdf->Ln(15);

//pour acte de naissance on aura:

    $pdf->Cell(50,10,"Nom:");
    $pdf->Cell(50,10,$nom);

    $pdf->Ln(10);

    $pdf->Cell(50,10,"Prenom:");
    $pdf->Cell(50,10,$pnom);
    $pdf->Ln(10);

    $pdf->Cell(50,10,"Né(e) le:");
    $pdf->Cell(50,10,$date);
    $pdf->Ln(10);

    $pdf->Cell(50,10,"A:");
    $pdf->Cell(50,10,$lieu);
    $pdf->Ln(10);

    $pdf->Cell(50,10,"Fils de:");
    $pdf->Cell(50,10,$nomP);
    $pdf->Ln(10);

    $pdf->Cell(50,10,"Et de:");
    $pdf->Cell(50,10,$nomM);
    $pdf->Ln(20);

    $pdf->Cell(70,10,'Certifie le présent extrait conforme aux indications');
     $pdf->Ln(10);
     $pdf->Cell(70,10,'portés sur le régistre');

     $pdf->Ln(20);
     $pdf->Cell(70,10,'Délivré le:');
     $pdf->Cell(70,10, ""); //put the local date her

    // echo "je suis format pdf";


    $pdf->Output();
}



?>
