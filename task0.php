<!-- То что первое делали на занятии, до 3ех задач в тг -->

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
            row-gap: 30px;
        }
    </style>
</head>
<body>
    <?php
    $mail = $_POST['mail'] ?? 0;
    $name = $_POST['name'] ?? 0;
    $text = $_POST['text'] ?? 0;


    if ($mail && $name && $text):
    ?>
        <p>пасиб за форму</p>
    <?php
    else:
    ?>
        <form action="testsite.php" method="POST">
            <input type="mail" name="mail" placeholder="your_email@mail.com">
            <input type="text" name="name" placeholder="Vasya">
            <textarea name="text"></textarea>
            <input type="submit" value="Отправить">
        </form>
    <?php
    endif;
    ?>
</body>
</html>
