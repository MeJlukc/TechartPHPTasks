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
        $availableSymbols[] = array_merge($availableSymbols, $digits);
    }
    if ($useUpperCase) {
        $availableSymbols[] = array_merge($availableSymbols, $upperCaseLetters);
    }
    if ($useSpecialSymbols) {
        $availableSymbols[] = array_merge($availableSymbols, $specialSymbols);
    }

    print_r($availableSymbols);

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
        <input type="input" name="length">
        <input type="checkbox" name="useDigits" value="1">
        <input type="checkbox" name="useUppercase" value="1">
        <input type="checkbox" name="useSpecialSymbols" value="1">
        <input type="submit" value="Отправить">
        <div class="result"><?=$result?></div>
    </form>
</body>
