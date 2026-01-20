<p>Second tasks</p>

<?php
$firstWord = "cat";
$secondWord = "tank";
$lastChar = substr($firstWord, -1, 1);
$firstChar = substr($secondWord, 0, 1);
if ($lastChar == $firstChar) {
    echo 'yes';
} else {
    echo 'no';
};
?>

<br>

<?php
$string = "201250420430503";
$zeroCounter = 0;
for ($i = 0; $i < strlen($string); $i++) {
    if ($string[$i] == 0) {
        $zeroCounter++;
    }
    if ($zeroCounter == 3) {
        echo $i;
    }
}
?>

<br>

<?php
$nums = '12,34,56';
$numsArray = explode(',', $nums);
$result = 0;
foreach ($numsArray as $num) {
	$result += $num;
}
echo $result;
?>

<br>

<?php
$date = '2025-12-31';
$dateArr = explode('-', $date);
$resArr = ['year' => $dateArr[0], 'month' => $dateArr[1], 'day' => $dateArr[2]];
print_r($resArr);
// хз оно не оно, по выводу не оно но вроде оно

?>

<br>