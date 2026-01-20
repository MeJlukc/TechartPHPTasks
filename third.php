<p>Third tasks</p>

<?php
$string = "023m0dgioj430f004f";
$zeroPositions = [];
for ($i = 0; $i < strlen($string); $i++) {
    if ($string[$i] == "0") {
        array_push($zeroPositions, $i);
    }
}
echo join(" ", $zeroPositions);
?>

<br>

<?php
$string2 = "abcdfdg6823r32";
$result = [];
for ($i = 0; $i < strlen($string2); $i++) {
    if (($i + 1) % 3 !== 0) {
        $result[] = $string2[$i];
    }
}
echo join(" ", $result);
?>

<br>

<?php
$nums = [1,2,3,4,5,6];
$evenSum = 0;
$notEvenSum = 0;
for ($i = 0; $i < count($nums); $i++) {
    if ($i % 2 === 1) {
        $evenSum += $nums[$i];
    } else {
        $notEvenSum += $nums[$i];
    }
}
echo $evenSum / $notEvenSum;
?>

<br>