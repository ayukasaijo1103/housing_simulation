<link rel="stylesheet" href="css/style1.css">
<?php
echo'<div class=title>結果</div>';
$total_money=$_POST['money'];
$years=$_POST['years'];
$rate=$_POST['rate'];
//月々の返済金額
$month=$total_money * $rate / 100 / 12;
echo '<div class=line><div class=content>年間返済額:' . $total_money / $years . '円<br>月々の返済額:'. $total_money / $years /12 . '円<br>1ヶ月目の返済金利額:' . $month . '円 </div></div>' ;

require_once('tcpdf_config.php');
$pdf = new TCPDF($orientation,$unit,$format,$unicode,$encoding,$diskcache,$pdfa);
$pdf ->addPage();
$pdf ->setFont('kozgopromedium','B',10);
$html = <<< EOF
HTML文章
EOF;
$pdf ->writeHTML($html);
$pdf ->Output(file,I);

