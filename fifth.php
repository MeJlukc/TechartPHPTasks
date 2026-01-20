<p>Fifth tasks</p>

<?php
$arr = ['124', '153', 'fsd3', '3rdf3'];
$result = [];
foreach ($arr as $el) {
    $result[] = $el;
    $result[] = $el;
}
print_r($result);
?>

<br>

<?php
$dividers = [25, 33, 32, 64, 50, 2, 533, 5];
$num = 250;
$res = [];
foreach ($dividers as $divider) {
    if ($num % $divider == 0) {
        $res[] = $divider;
    }
}
print_r($res);
?>

<br>

<?php
$num1 = 2141573;
$num2 = 642217;
$num1AsString = (string)$num1;
$digits1 = str_split($num1AsString);
$num2AsString = (string)$num2;
$digits2 = str_split($num2AsString);
$commonDigits = [];
foreach ($digits1 as $digit1) {
    if (!in_array($digit1, $commonDigits)) {
        foreach ($digits2 as $digit2) {
            if ($digit1 == $digit2) {
                $commonDigits[] = $digit1;
                break;
            }
        }
    }
}
print_r($commonDigits);
?>

<br>

<?php
$number = 3436435236332335;
$numberAsString = (string)$number;
$idsDigitThree = [];
for ($i = 0; $i < strlen($numberAsString); $i++) {
    if ($numberAsString[$i] == 3) {
        $idsDigitThree[] = $i;
    }
}
array_shift($idsDigitThree);
array_pop($idsDigitThree);
print_r($idsDigitThree);
?>

<br>

<?php
$nums5 = [132, 234, 345, 515, 567, 533, 785, 909];
$resultat = [];
foreach ($nums5 as $num5) {
    $num5AsString = (string)$num5;
    $digits5 = str_split($num5AsString);
    $occupiedDigits = [];
    for ($i = 0; $i < count($digits5); $i++) {
        if (!in_array($digits5[$i], $occupiedDigits)) {
            $occupiedDigits[] = $digits5[$i];
        }
    }
    if (count($occupiedDigits) == count($digits5)) {
        $resultat[] = $num5;
    }
}
print_r($resultat);
?>

<br>

<?php
$numbersArray = [[1, 2, 3], [4,5,6], [7,8,9]];
$resultatik = [];
foreach ($numbersArray as $numbers) {
    foreach ($numbers as $number) {
        $resultatik[] = $number;
    }
}
print_r($resultatik);
?>

<br>