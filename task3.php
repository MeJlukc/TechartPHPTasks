<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 400px;
            align-items: start; 
            margin: 10px;  
        }
    </style>
</head>
<body>
    <?php
    $length = $_POST['length'] ?? 0;
    $useDigits = $_POST['useDigits'] ?? 0;
    $useUpperCase = $_POST['useUpperCase'] ?? 0;
    $useSpecialSymbols = $_POST['useSpecialSymbols'] ?? 0;

    $digits = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    $upperCaseLetters = str_split("QWERTYUIOPASDFGHJKLZXCVBNM");
    $specialSymbols = str_split("!@#$%^&*()-_=+[]{}<>?");

    $availableSymbols = str_split("qwertyuiopasdfghjklzxcvbnm");

    if ($useDigits) {
        $availableSymbols = array_merge($availableSymbols, $digits);
    }
    if ($useUpperCase) {
        $availableSymbols = array_merge($availableSymbols, $upperCaseLetters);
    }
    if ($useSpecialSymbols) {
        $availableSymbols = array_merge($availableSymbols, $specialSymbols);
    }

    $preResult = [];

    if (($length < 8) || ($length > 32)) {
        $result = "Длина должна быть в диапазоне 8-32";

    } else {
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = random_int(0, count($availableSymbols) - 1);
            $preResult[] = $availableSymbols[$randomIndex];
        }
        $result = join('', $preResult);
    }
    ?>
    <form action="task3.php" method="POST">
        <label for="length">Длина пароля
            <input type="input" name="length">
        </label>
        <label for="useDigits">Использовать цифры
            <input type="checkbox" name="useDigits" value="1">
        </label>
        <label for="useUpperCase">Использовать заглавные буквы
            <input type="checkbox" name="useUpperCase" value="1">
        </label>
        <label for="useSpecialSymbols">Использовать спецсимволы
            <input type="checkbox" name="useSpecialSymbols" value="1">
        </label>
        <input type="submit" value="Отправить">
    </form>
    <div class="result">Ваш пароль: <?=$result?></div>
</body>
</html>
