<body>
    <?php
    // print_r($_POST);
    // $length = $_POST['length'] ?? 0;
    // $useDigits = $_POST['useDigits'] ?? 0;
    // $useUppercase = $_POST['useUpperCase'] ?? 0;
    // $useSpecialSymbols = $_POST['useSpecialSymbols'] ?? 0;
    // $options = [$useDigits, $useSpecialSymbols, $useUppercase];

    // $digits = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    // $letters = str_split("qwertyuiopasdfghjklzxcvbnm");
    // $uppercaseLetters = str_split("QWERTYUIOPASDFGHJKLZXCVBNM");
    // $specialSymbols = str_split("!@#$%^&*()-_=+[]{}<>?");

    // $result;

    // if (($length < 8) || ($length > 32)) {
    //     $result = "Длина должна быть в диапазоне 8-32";

    // } else {
    //     $availableSymbols = [];

    //     foreach ($options as $option) {
            
    //     }
    //     for ($i = 0; $i < $length; $i++) {

    //     }
    // }
    ?>
    <?php
    print_r($_POST);
    $length = $_POST['length'] ?? 0;
    $useDigits = $_POST['useDigits'] ?? 0;
    $useUppercase = $_POST['useUpperCase'] ?? 0;
    $useSpecialSymbols = $_POST['useSpecialSymbols'] ?? 0;

    $digits = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    $uppercaseLetters = str_split("QWERTYUIOPASDFGHJKLZXCVBNM");
    $specialSymbols = str_split("!@#$%^&*()-_=+[]{}<>?");

    $availableSymbols = [str_split("qwertyuiopasdfghjklzxcvbnm")];

    $useDigits == 1 ? $availableSymbols[] = $digits : 0;
    $useUppercase == 1 ? $availableSymbols[] = $uppercaseLetters : 0;
    $useSpecialSymbols == 1 ? $availableSymbols[] = $specialSymbols : 0;

    $preResult = [];
    print_r($availableSymbols);

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
