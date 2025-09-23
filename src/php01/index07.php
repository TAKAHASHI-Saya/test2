<?php
    function outputNumber($a){
    echo "引数の値は" . $a . "です";
    return;
}
outputNumber(2);
?>

<?php
function outputHello(){
    echo "Hello World";
}
outputHello();
?>

<?php
function text($number1, $number2){
    $value = $number1 + $number2;
    return $value;
}
$total = text(2,4);
echo $total;
?>

<?php
function addNumber($number1, $number2){
    $value = $number1 + $number2;
    return $value;
}
$total = addNumber(2,3);
echo $total;
echo "<br />";
?>

<?php
function Scores($score1, $score2, $score3){
    $value = $score1 + $score2 + $score3;
    if ($value > 210){
    echo "合計点は" . $value . "点なので合格です";
}else{
    echo "合計点は" . $value . "点なので不合格です";
    echo "<br />";
}
}
Scores(100, 50, 100);
?>

<!-- 三角形 -->
<?php
function Triangle ($teihen, $takasa){
    $result = $teihen * $takasa / 2;
    echo "<br />";
    echo "三角形の面積は" . $result;
    return;
}
Triangle (5, 6);
?>
<!-- 四角形 -->
<?php
function Square ($hen, $takasa){
    $result = $hen * $takasa;
    echo "<br />";
    echo "四角形の面積は" . $result;
    return;
}
Square (4, 9);
?>
<!-- 台形 -->
<?php
function Daikei ($uenohen, $shitanohen, $takasa){
    $result1 = $uenohen + $shitanohen;
    $result2 = $result1 * $takasa / 2;
    echo "<br />";
    echo "台形の面積は" . $result2;
    return;
}
Daikei (5, 10, 8);
?>