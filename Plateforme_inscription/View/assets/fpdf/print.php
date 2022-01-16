<?php
require('fpdf.php');

require_once('../../database/connexion.php');

$id = $_GET[('num')];

$req = $db->prepare('select nom, prenom, sexe, naissance, nationnalité, libserie, bacsession
                   from v_candidature where numcandidat =?');
$req->execute(array($id));
$result = $req->fetch();

$nom_candidat = $result['nom'];
$prenom_candidat = $result['prenom'];
$sexe_candidat = $result['sexe'];
$naiss_candidat = implode('/', array_reverse(explode('-', $result['naissance'])));
$pays = $result['nationnalité'];
$serie = $result['libserie'];
$session = $result['bacsession'];

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('../img/logo.png', 10, 6, 30);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Move to the right
        $this->Cell(50);
        // Title
        $this->Cell(30, 10, "INSTITUT AFRICAIN D'INFORMATIQUE", 'C');
        // Line break
        $this->Ln(10);

        $this->SetFont('Arial', '', 15);
        $this->Cell(40);

        $this->Cell(30, 10, "Etablissement Inter-Etats d'Enseignement superieur", 'C');
        // Line break
        $this->Ln(10);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'B', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

$pdf->Ln(10);

$pdf->Cell(0, 10, "FICHE DE SOUMISSION DE CANDIDATURE ", 'LTRB', 1, 'C');

$pdf->Cell(0, 10, "Mat: " . $_GET['num'], 0, 1, 'C');
$pdf->Ln(5);

$pdf->SetFont('Times', '', 14);
$haut = 7;
$retrait = "        ";

$pdf->Write($haut, $retrait . 'Nom:       ');

$pdf->SetFont('', 'B', 14);
$pdf->Write($haut, $retrait . $nom_candidat . "\n");
$pdf->Ln(7);

$pdf->SetFont('', '');
$pdf->Write($haut, $retrait . 'Prenoms: ' . $retrait . $prenom_candidat . "\n");
$pdf->Ln(7);

$pdf->Write($haut, $retrait . 'Sexe:       ' . $retrait . $sexe_candidat . "\n");
$pdf->Ln(7);

$pdf->Write($haut, $retrait . 'Naissance:      ' . $naiss_candidat . "\n");
$pdf->Ln(7);

$pdf->Write($haut, $retrait . 'Nationnalite:    ' . $pays . "\n");
$pdf->Ln(7);

$pdf->Write($haut, $retrait . 'Serie:       ' . $retrait . $serie . "\n");
$pdf->Ln(7);

$pdf->Write($haut, $retrait . 'Session BAC:     ' . $session);
$pdf->Ln(7);

/*for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Printing line number '.$i,0,1);*/

$pdf->Output();
