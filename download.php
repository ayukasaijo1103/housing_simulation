<?php

include "./tcpdf/tcpdf.php";

$tcpdf = new TCPDF();
$tcpdf->AddPage();
$tcpdf->SetFont("kozgopromedium", "", 10);

$tuki=$_GET['nickname'];

$html2 = <<< EOF
<style>
p{
    text-align:center;
    margin-top:50px;
}
</style>
<p>$tuki </p>
   
 
EOF;

$tcpdf->writeHTML($html2);
$tcpdf->Output('samurai2.pdf', 'D'); // 第二引数をDに変更する

?>




</body>
</html>