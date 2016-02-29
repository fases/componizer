<?php
App::import('Vendor','tcpdf/tcpdf'); 
//carrega o construtor do pdf
$pdf = new TCPDF();
$pdf->setPrintHeader(false);

$pdf->setPrintFooter(false);

$pdf->SetMargins(20, 20, 0);
	$pdf->AddPage('P','A4');
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Componizer');
	$pdf->SetTitle('Relatório pdf');
$html = '
<h1> Relatorio de Estoque - Componizer</h1>';
$html .= '<table class="table"> ';
$i = 0;
foreach ($users as $user) {
	$html .= '<tr> ';
	$html .= '<td>'.$user['User']['username'].'</td>';
	$i++;
	$html .= '</tr> ';
}
$html .= '</table> ';
$pdf->writeHTML($html);

echo $pdf->Output('Relatorio.pdf','I'); 
?>