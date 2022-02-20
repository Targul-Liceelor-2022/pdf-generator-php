<?php

require_once("fpdf/fpdf.php");
define('FPDF_FONTPATH','fpdf/font/');


$nume = $_POST['nume'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$nume_minor = $_POST['nume_minor'];
$tel_minor = $_POST['tel_minor'];
$email_minor = $_POST['email_minor'];
    


class PDF extends FPDF{
    function Header(){
        $this->image('images/logo_targ.png', 10,6,30);
        $this->SetFont('Arial', '', 12);
        $this->Cell(100);
        $this->Ln(20);
        $this->Line(10, 45, 210-10, 45);
        $this->SetFont('Arial','B',30);
      //  $this->SetTextColor(255,255,255);
        $this->SetXY(60,55);
        $this->Cell(100,15,"ACORD PARENTAL",0,0,'R');
    }

    function Footer()
    {
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','', 12);

    $this->Line(10, 268, 210-10, 268);
    // Print centered page number
    $this->image('images/logo_isj.png', 65,272,20);
    $this->image('images/sapphire.png', 95,280,50);
    }
}

$pdf = new PDF('P','mm','A4');
$pdf->AddPage();
$mid_x = 210 / 2;

$text = "Subsemnatul/a " .$nume. ", telefon " .$tel. ", e-mail ".$email.", părinte/tutore legal al minorului/ei ".$nume_minor.", telefon ".$tel_minor.",
 e-mail ".$email_minor.", declar pe proprie răspundere că sunt de acord cu:";
$pdf->SetFont('Arial','',12);
//$pdf->Text($mid_x - ($pdf->GetStringWidth($text) / 2), 102, $text);
$pdf->Cell(210-20,100,$text,2,0,'C');



$file = time().'.pdf';
$pdf->output($file,'D');
?>