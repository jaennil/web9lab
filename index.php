<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Дубровских Никита Евгеньевич 221-361 Лаб-9 Вариант-8</title>
</head>

<body>
    <header>
        <image class="logo" src="media/logo.png">
    </header>
    <main>
        <?php
        require_once("logic.php");
        ?>
    </main>
    <footer>
        <?php
        echo "type: ". $type . "<br>";
        echo "min: " . $min . "<br>";
        echo "max: " . $max . "<br>";
        echo "sum: " . $sum . "<br>";
        if ($total == 0) {
            echo "average: " . 0;
            return;
        }
        echo "average: " . $sum/$total;
        ?>
    </footer>

</body>

</html>