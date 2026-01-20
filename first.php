<p>First tasks</p>

<?php
$randomNumArray = [];
for ($i = 0; $i < 5; $i++) {
    array_push($randomNumArray, rand(1, 100));
}
echo join(' ', $randomNumArray);
?>

<br>

<?php
$num = 12345;
$string = (string)$num;
for ($i = 4; $i >= 0; $i--) {
    echo $string[$i];
}
?>

<br>

<?php
$arr = [1, 2, 3, 4, 5, 6];
$doubledArr = array_chunk($arr, 2);
foreach ($doubledArr as $el) {
    echo join(' ', $el);
}
?>

<br>

<?php
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$resultArray = array_merge($arr1, $arr2);
echo join(' ', $resultArray);
?>
