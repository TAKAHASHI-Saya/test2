<!-- for文 -->
<?php
for ($i = 1; $i <= 5; $i++){
    echo $i * 2;
    echo "<br />";
}
?>

<!-- while文 -->
<?php
$count = 0;
while($count < 20){
    $count += 1;
    echo $count . "<br />";
}
?>
<!-- breakの使い方 -->
<?php
$i = 0;
while($i < 10){
    if($i == 5){
        break;
    }
    echo $i;
    $i ++;
}
?>
<!-- continueの使い方 -->
<?php
$i = 0;
while ($i < 10){
    if ($i == 5){
        $i++;
        continue;
    }
    echo $i;
    $i++;
}?>
<?php
$count = 0;
while ($count <= 100){
    if ($count === 20){
        break;
    }
    if ($count % 3 === 0){
        $count++;
        continue;
    }
    echo "<br />";
    echo $count;
    $count++;
}?>

<!-- do-while文 -->
<?php
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 5);
?>
<?php
$num = 0;
do {
    echo "<br />";
    echo 'num = ' . $num;
    $num += 1;
} while ($num < 3);
?>

<!-- Fizz Buzz問題 -->
<?php
for ($i = 1; $i <= 50; $i++){
    if ($i % 3 == 0){
        echo "<br />";
        echo "Fizz";
    }elseif ($i % 5 == 0){
        echo "<br />";
        echo "Buzz";
    }elseif ($i % 15 == 0){
        echo "<br />";
        echo "FizzBuzz";
    }else{
        echo "<br />";
        echo $i;
    }
}?>

<!-- 二重ループ -->
<?php
for ($i = 1; $i < 6; $i++){
    for ($j = 1; $j < 6; $j++){
        echo "●";
    }
    echo "<br />";
}