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
        }
        .result {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <?php
    $cities = ['Москва', 'Санкт-Петербург', 'Новосибирск', 'Казань', 'Екатеринбург'];

    $partCityName = $_GET['partCityName'] ?? "";
    $re = "/$partCityName/iu";
    $matches = [];

    foreach ($cities as $city) {
        if (preg_match($re, $city)) {
            $matches[] = $city;
        }
    }

    $result = join(', ', $matches);
    ?>
    <form action="task2.php" method="GET">
        <label for="partCityName">Название города
            <input type="text" name="partCityName" placeholder="Начните вводить название города">
        </label>
        <input type="submit" value="Отправить">
    </form>
    <div class="result"><?=$result?></div>
</body>
</html>
