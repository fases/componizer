<?php
 
App::import('Vendor','xtcpdf');
 
$pdf = new XTCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);
 
$pdf--->AddPage();
 
$html = '</pre>
<h1>hello world</h1>
<pre>';
 
foreach ( $users as $user ){
    $html .= '
'.$user['User']['id'];
}
 
$pdf->writeHTML($html, true, false, true, false, '');
 
$pdf->lastPage();
 
echo $pdf->Output(WWW_ROOT . 'files' . DS . 'test.pdf', 'F');
?>