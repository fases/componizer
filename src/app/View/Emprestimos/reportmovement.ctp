<?php
App::import('Vendor','tcpdf/tcpdf'); 
//carrega o construtor do pdf
$pdf = new TCPDF();
$pdf->setPrintHeader(false);

$pdf->setPrintFooter(false);

$pdf->SetMargins(20, 20, 20);
	$pdf->AddPage('P','A4');
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Componizer');
	$pdf->SetTitle('Relatório pdf');
$html = '<h1> Relatório de Movimentação</h1>';
$html .= '<center>';
$html .= '<table border="1" style="text-align:center;">';
$html .= '<tr><th><strong>Nome</strong></th>';
$html .= '<th><strong>Especificação</strong></th>';
$html .= '<th><strong>Quantidade de requisições</strong></th>';
$html .= '<th><strong>Componentes Utilizados</strong></th></tr>';
$i = 0;
foreach ($componentes as $componente) {
	$html .= '<tr>';
	$html .= '<td style="text-align:center;">'.$componente['c']['nome'].'</td>';
	$html .= '<td style="text-align:center;"> categoria </td>';
	$html .= '<td style="text-align:center;">'.$componente['d']['quant'].'</td>';
	$html .= '<td style="text-align:center;">'.$componente['d']['quantidade'].'</td>';
	$html .= '</tr>';
	$i++;
}
$html .= '</table> ';
$html .= '</center>';
$pdf->writeHTML($html);

echo $pdf->Output('Relatorio.pdf','I'); 
?>