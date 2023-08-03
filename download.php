<?php

include "./tcpdf/tcpdf.php";

$tcpdf = new TCPDF();
$tcpdf->AddPage();
$tcpdf->SetFont("kozgopromedium", "", );

$tuki=$_GET['nickname'];

$html2 = <<< EOF
<style>
p{
    text-align:center;
}
.title{
    text-align:center;
    background-color: light-grey;
    padding-bottom:100px;
    font-size:19rem;
}

</style>
<div class="title">結果</div>
<p>$tuki </p>
   
 
EOF;

$tcpdf->writeHTML($html2);
$tcpdf->Output('sample.pdf', 'D'); // 第二引数をDに変更する

?>




</body>
</html>