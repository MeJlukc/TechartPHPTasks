<p>Second tasks</p>

<?php
$firstWord = "cat";
$secondWord = "tank";
$lastChar = substr($firstWord, -1);
$firstChar = substr($secondWord, 0);
if ($lastChar == $firstChar) {
    echo 'yes';
} else {
    echo 'no';
}; // неправильно работает
?>

<br>

<?php
$string = "201250420430503";
for ($i = 0; $i < strlen($string); $i++) {
    $zeroCounter = 0;
    if ($i == 0) {
        $zeroCounter++;
    }
    if ($zeroCounter == 3) {
        echo $i;
    }
} // вообще какого то хуя не работает
?>

<br>

<?php
$nums = '12,34,56';
$numsArray = explode(',', $nums);
//  не ебу пока чо дальше
?>

<br>

<?php
$date = '2025-12-31';
$dateArr = explode('-', $date);
$resArr = ['year' => $dateArr[0], 'month' => $dateArr[1], 'day' => $dateArr[2]];
echo join("\n", $resArr);
// хз оно не оно, по выводу не оно но вроде оно
?>
