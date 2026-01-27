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
            row-gap: 10px;
            align-items: start;
        }
        .result {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <?php
    $num1 = $_POST['num1'] ?? '';
    $num2 = $_POST['num2'] ?? '';
    $operator = $_POST['operator'] ?? '+';
    $result = "Введите числа";
    
    try {
        if ($num1 !== '' && $num2 !== '') {
            switch ($operator) {
                case '+':
                    $sum = $num1 + $num2;
                    $result = $num1 . "+" . $num2 . "=" . $sum;
                    break;
                case '-':
                    $diff = $num1 - $num2;
                    $result = $num1 . "-" . $num2 . "=" . $diff;
                    break;
                case '*':
                    $multiply = $num1 * $num2;
                    $result = $num1 . "*" . $num2 . "=" . $multiply;
                    break;
                case '/':
                    // if ($num2 === 0) {
                    //     $quotient = "Делить на 0 нельзя";
                    //     break;
                    // }
                    $quotient = $num1 / $num2;
                    $result = $num1 . "/" . $num2 . "=" . $quotient;
                    break;
            }
        }
    } catch (DivisionByZeroError) {
        $result = "Делить на 0 нельзя";
    }

    ?>
    <form action="task1.php" method="POST">
        <label for="num1">Число 1
            <input type="text" name="num1">
        </label>
        <label for="num2">Число 2
            <input type="text" name="num2">
        </label>
        <label for="operator">Выберите операцию
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </label>
        <input type="submit" value="Отправить">
    </form>
    <div class="result"><?=$result?></div>
</body>
</html>
