<?php

    require 'pfd\fpdf\fpdf.php';

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(110,10,'OBRAS AGREGADAS ACTUALMENTE',1,1,'C');
    
    $pdf->Cell(110,10,'',0,1,'C');

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(50,10,'SECCION ANIME',1,1,'C');
    $pdf->Cell(200,10,'CHAINSAW MAN, BOCCHI THE ROCK!, SHINGEHI NO KYOJIN',0,1,'L');

    $pdf->Cell(110,10,'',0,1,'C');

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(50,10,'SECCION MANGAS',1,1,'C');
    $pdf->Cell(200,10,'MY DRESS-UP DARLING, THE QUINTESSENTIAL QUINTUPLETS, TOKYO GHOUL',0,1,'L');

    $pdf->Cell(110,10,'',0,1,'C');

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(50,10,'SECCION MANGAS',1,1,'C');
    $pdf->Cell(200,10,'NIER: AUTOMATA, GENSHIN IMPACT, DOKI DOKI LITERATURE CLUB!',0,1,'L');

    $pdf->Output();

?>