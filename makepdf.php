<?php

require_once("fpdf/fpdf.php");
define('FPDF_FONTPATH', 'fpdf/font/');


$nume = $_POST['nume'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$nume_minor = $_POST['nume_minor'];
$tel_minor = $_POST['tel_minor'];
$email_minor = $_POST['email_minor'];



class PDF extends FPDF
{
  function Header()
  {
    $this->image('images/logo_targ.png', 10, 6, 30);
    $this->SetFont('Arial', '', 12);
    $this->Cell(100);
    $this->Ln(20);
    $this->Line(10, 45, 210 - 10, 45);
    $this->SetFont('Arial', 'B', 30);
    //  $this->SetTextColor(255,255,255);
    $this->SetXY(60, 50);
    $this->Cell(100, 15, "ACORD PARENTAL", 0, 0, 'R');
    $this->SetFont('Arial', 'B', 12);
    $this->SetXY(100, 10);
    $this->Cell(100, 15, "www.tglictm.ro - targul.liceelor@sapphiregroup.ro", 0, 0, 'R');
  }

  function Footer()
  {
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial', '', 12);

    $this->Line(10, 268, 210 - 10, 268);
    // Print centered page number
    $this->image('images/logo_isj.png', 65, 272, 20);
    $this->image('images/sapphire.png', 95, 280, 50);
  }
}

$pdf = new PDF('P', 'mm', 'A4');
$pdf->AddPage();
$mid_x = 210 / 2;

$text = "Subsemnatul/a " . $nume . ", telefon " . $tel . ", e-mail " . $email . ", părinte/tutore legal al minorului/ei " . $nume_minor . ", telefon " . $tel_minor . ",
 e-mail " . $email_minor . ", declar pe proprie răspundere că sunt de acord cu:";
$pdf->SetFont('Arial', '', 12);
//$pdf->Text($mid_x - ($pdf->GetStringWidth($text) / 2), 102, $text);
setlocale(LC_CTYPE, 'ro_RO');
$value = iconv('UTF-8', 'ASCII//TRANSLIT', $text);
//$pdf->MultiCell(200, 40, $value, 2, 0, 'C');
$pdf->Ln(20);
$pdf->SetXY(5, 70);
$pdf->MultiCell(200, 8, $value, 0, 'C', false);

$text2 = "1. Participarea minorului aflat sub tutela mea la evenimentul \"Marea Lansare, Traditii - Obiceiuri - Briefing\" din cadrul Targului Liceelor Timisene, organizat la Scoala Gimnaziala Nitchidorf, Joi, in data de 24 Februarie de la ora 11:00, organizat de către Inspectoratul Scolar Judetean Timis impreuna cu Sapphire Romania.";
$pdf->SetFont('Arial', '', 12);
//$pdf->Text($mid_x - ($pdf->GetStringWidth($text) / 2), 102, $text);
setlocale(LC_CTYPE, 'ro_RO');
$value2 = iconv('UTF-8', 'ASCII//TRANSLIT', $text2);
$pdf->Ln(20);
$pdf->SetXY(5, 100);
$pdf->MultiCell(200, 8, $value2, 0, 'C', false);

$text3 = "2. Procesarea datelor cu caracter personal ale minorului aflat sub tutela mea, de catre SC SAPPHIRE TECHNOLOGY INCORPORATED, cunoscut ca Sapphire Romania - organizatorul evenimentului - date conferinte in acest acord parental. Datele furnizate vor fi folosite in minimul necesar organizarii evenimentului, adica pentru a tine evidenta participantilor la activitate.";
$pdf->SetFont('Arial', '', 12);
//$pdf->Text($mid_x - ($pdf->GetStringWidth($text) / 2), 102, $text);
setlocale(LC_CTYPE, 'ro_RO');
$value3 = iconv('UTF-8', 'ASCII//TRANSLIT', $text3);
$pdf->Ln(20);
$pdf->SetXY(5, 140);
$pdf->MultiCell(200, 8, $value3, 0, 'C', false);

$text4 = "3. Folosirea imaginii minorului aflat sub tutela mea pe website-ul Targul Liceelor Timisene - www.targulliceelor-timisene.ro şi www.tglictm.ro - pe paginile de Facebook ale ISJ Timis, Sapphire Romania, pe cele ale partenerilor sau sponsorilor evenimentului, si posibil pe platformele de stiri care vor alege sa promoveze evenimentul.";
$pdf->SetFont('Arial', '', 12);
//$pdf->Text($mid_x - ($pdf->GetStringWidth($text) / 2), 102, $text);
setlocale(LC_CTYPE, 'ro_RO');
$value4 = iconv('UTF-8', 'ASCII//TRANSLIT', $text4);
$pdf->Ln(20);
$pdf->SetXY(5, 180);
$pdf->MultiCell(200, 8, $value4, 0, 'C', false);

$text5 = "Data 21.02.2022 Semnatura";
$pdf->SetFont('Arial', 'B', 18);
$pdf->SetXY(80, 235);
$pdf->MultiCell(50, 8, $text5, 0, 'C', false);



$file = time() . '.pdf';
$pdf->output($file, 'D');
