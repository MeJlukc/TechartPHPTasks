<p> Fourth tasks</p>

<?php
$numsArray = [424, 3, 4114, 214, 64343, 345, 43647, 5236462, 324];
$result = [];
foreach ($numsArray as $num) {
    if (strlen($num) < 4) {
        $result[] = $num;
    }
}
print_r($result);
?>

<br>

<?php
$num = 12345;
function isDigitsMoreThenZero($num) {
    $numAsString = (string)$num;
    $digits = str_split($numAsString);
    foreach ($digits as $digit) {
        if ($digit < 0) {
            return false;
        }
    }
    return true;
}
echo isDigitsMoreThenZero($num);
?> 

<br>

<?php
$numsArr = [123, 456, 789];
$res = [];
foreach ($numsArr as $nums) {
    $numString = (string)$nums;
    $digits = str_split($numString);
    foreach ($digits as $digit) {
        $res[] = $digit;
    }
}
print_r($res);
?>

<br>