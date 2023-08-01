<?php

include "./tcpdf/tcpdf.php";

$tcpdf = new TCPDF();
$tcpdf->AddPage();

$tcpdf->SetFont("kozgopromedium", "", 10);

$html = <<< EOF
<style>
h1 {
    font-size: 24px;
    color: #ff00ff;
    text-align: center;
}
p {
    font-size: 12px;
    color: #000000;
    text-align: left;
}
</style>
<h1>侍エンジニア</h1>
<p>
今日は侍エンジニアについてお話させていただきます。
</p>
EOF;

$result = "";
if (isset($_POST['add'])) {
    $result = "登録しました";
    $tcpdf->writeHTML($html);
    $tcpdf->Output('samurai.pdf', 'D'); // 第二引数をDに変更する
    // echo $result;
}
?>