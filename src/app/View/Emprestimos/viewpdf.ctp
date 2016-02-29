<?php
	App::import('Vendor','tcpdf/tcpdf'); 

//carrega o construtor do pdf
$Pdf = new TCPDF();

$Pdf->setPrintHeader(false);

$Pdf->setPrintFooter(false);

$Pdf->SetMargins(10, 20, 0);

$Pdf->AddPage('P','A4');

$html = '
 <h1> Relatorio de Estoque - Componizer</h1>';
foreach ($users as $user) {
	$html .= '<p>'.$user['User']['username'].'</p>';
}

$Pdf->writeHTML($html);

echo $Pdf->Output('etiqueta.pdf','I'); 
?>