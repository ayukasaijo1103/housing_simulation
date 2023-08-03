<link rel="stylesheet" href="css/style1.css">
<?php
include "./tcpdf/tcpdf.php"; // include_path配下に設置したtcpdf.phpを読み込む
$tcpdf = new TCPDF();
$tcpdf->SetFont("kozgopromedium", "", 10);

echo'<div class=title>結果</div>';
$total_money=(float)$_POST['money'];
$years=(float)$_POST['years'];
$rate=(float)$_POST['rate'];
if(!(0<$total_money)){
    echo '<div class=error><p>借入金額を正しく入力してください</p></div>';
    
}
if(!((1<$years) && ($years<41))){
    echo '<div class=error><p>返済年数を正しく入力してください</p></div>';
    
}
if(!(0<$rate)){
    echo '<div class=error><p>金利を正しく入力してください</p></div>';
    echo '<div class=btn><a href="."index.html"."><p class=button><input type=submit value=戻る></p></a></div>';
    exit;
}



//月々の返済金額
$month=$total_money * $rate / 100 / 12;
$year_month=$total_money/$years;
$month_money=$total_money/$years/12;
$coment= '<div class=line><div class=content>年間返済額:' . $total_money / $years . '円<br>月々の返済額:'. $total_money / $years /12 . '円<br>1ヶ月目の返済金利額:' . $month . '円 </div></div>' ;
$month=(string)$month;

$html = <<< EOF
<style>
p{
    display:flex;
    justify-content: center;
}
.top{
    margin-top:  250px;
}
a{
    text-decoration:none;
    color:black;
    border:solid 2px red;
    display:flex;
    justify-content: center;
    margin-left:720px;
    margin-right:720px;
    border-radius:10%;
}
a:hover{
    color:grey;
}

</style>
<p class="top">年間返済額：$year_month 円</p>
<p>月々の返済額：$month_money 円</p>
<p>1ヶ月目の返済金利額:$month 円</p>
<a href="download.php?nickname=$coment">PDF</a>

EOF;

// <form action="download.php" method="post">
//     <button type="submit" name="add">登録</button>
// </form>

// <form action="download.php" method="post">
// </form>
echo $html;

// $result = "";

// echo '<div class=btn><p class=button><input type=submit value=PDF></p></div>';

// echo '<div class=btn><a href=".""."><p class=button><input type=submit value=PDF></p></a></div>';


// $tcpdf->writeHTML($html);
// $tcpdf->Output('samurai.pdf', 'D'); // 第二引数をDに変更する





// require_once('TCPDF/tcpdf.php');
// // $pdf = new TCPDF($orientation,$unit,$format,$unicode,$encoding,$diskcache,$pdfa);
// $pdf = new TCPDF('P', 'mm', 'A4',true, 'UTF-8',false,false);
// $pdf ->addPage();
// $pdf ->setFont('kozgopromedium', 'B',10);
// $html = <<< EOF
    
//   EOF;
// $pdf ->writeHTML($html);
// $pdf ->Output("file.pdf","I"); -->
//  -->
