<?php
include("../vendor/autoload.php");
require_once 'idiorm.php';
		ORM::configure('mysql:host=localhost;dbname=fantastic_beasts');
		ORM::configure('username','root');
		ORM::configure('password','root');		
		ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// extend TCPF with custom functions
class MYPDF extends TCPDF {

	// Load table data from file
	public function LoadData($file) {
		// Read file lines
		$lines = file($file);
		$data = array();
		foreach($lines as $line) {
			$data[] = explode(';', chop($line));
		}
		return $data;
	}

	// Colored table
	public function ColoredTable($header,$data) {
		// Colors, line width and bold font
		$this->SetFillColor(85, 170, 85);
		$this->SetTextColor(255);
		$this->SetDrawColor(85, 170, 85);
		$this->SetLineWidth(0.3);
		$this->SetFont('', 'B');
		// Header
		$w = array(40, 35, 40, 45);
		$num_headers = count($header);
		for($i = 0; $i < $num_headers; ++$i) {
			$this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
		}
		$this->Ln();
		// Color and font restoration
		$this->SetFillColor(224, 235, 255);
		$this->SetTextColor(0);
		$this->SetFont('');
		// Data
		$fill = 0;
		foreach($data as $row) {
			$this->Cell($w[0], 10, $row['Naziv'], 'LRB', 0, 'L', $fill);
			$this->Cell($w[1], 10, $row['Vrsta'], 'LRB', 0, 'L', $fill);
			$this->Cell($w[2], 10, $row['Zivotinja'], 'LRB', 0, 'L', $fill);
			$this->Cell($w[3], 10, $row['Opis'], 'LRB', 0, 'L', $fill);
			$this->Cell($w[4], 10, number_format($row['Cijena']), 'LRB', 0, 'L', $fill);
			$this->Ln();
			$fill=!$fill;
		}
		$this->Cell(array_sum($w), 0, '', 'T');
	}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 011');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Kosarica", "Fantastic Beasts - Trgovina za zivotinje \n www.fantasticbeasts.hr");

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

// column titles
$header = array('Naziv', 'Vrsta proizvoda', 'Tip zivotinje', 'Opis','Cijena');
$token=substr($_COOKIE["shop"],1);
$results2=ORM::for_table('proizvodi')->select_many(array('Naziv'=>'proizvodi.naziv','Vrsta'=>'proizvod.vrstaProizvoda','Zivotinja'=>'zivotinje.nazivZivotinje',
								'Opis'=>'proizvodi.opisProizvoda','Cijena','id'=>'proizvodi.id'))->
							join('proizvod',array('proizvodi.tipProizvoda','=','proizvod.id'))->							
							join('zivotinje',array('proizvodi.tipZivotinje','=','zivotinje.id'))->
							where_raw("proizvodi.id in($token)")->
							order_by_asc('id')->
							find_array();
// data loading
//var_dump ($results2);
$data = $results2;

// print colored table
$pdf->ColoredTable($header, $data);

// ---------------------------------------------------------

// close and output PDF document
$pdf->Output('example_011.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+

?>