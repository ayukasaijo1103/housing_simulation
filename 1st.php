<link rel="stylesheet" href="css/style1.css">
<?php
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
echo '<div class=line><div class=content>年間返済額:' . $total_money / $years . '円<br>月々の返済額:'. $total_money / $years /12 . '円<br>1ヶ月目の返済金利額:' . $month . '円 </div></div>' ;

