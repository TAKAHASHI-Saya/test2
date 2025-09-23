<!-- 演算子 -->
<!-- 算術演算子 -->
<?php
$a = 15;
$b = 3;
$c = 10;

echo $a + $b;
echo "<br />";
echo $a - $b;
echo "<br />";
echo $a * $b;
echo "<br />";
echo $a - $c;
echo "<br />";
echo $a / $b;
?>

<!-- 複合演算子 -->
<?php
$a=15;
$b=3;
$c=10;
$d=5;

$a = $b;
$c += $d;

echo "<br />";
echo $a;
echo "<br />";
echo $c;
echo "<br />";
?>

<!-- 比較演算子 -->
<?php
$a=20;
$b=5;

echo "<br />";
echo $a>$b;
echo "<br />";
echo $b>$a;
?>

<!-- 論理演算子 -->
<?php
$a=20;
$b=5;

echo "<br />";
echo ($a>10&&$a<30);
echo "<br />";
echo ($b > 10 && $b < 30);
?>

<!-- 加算子と減算子 -->
<?php
$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo "<br />";
echo ++$a;
echo "<br />";
echo $b++;
echo "<br />";
echo --$c;
echo "<br />";
echo $d--;
?>