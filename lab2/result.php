<!DOCTYPE html>
<html>
<head>
    <title>Результат</title>
</head>
<body>
    <h3>Результат вычислений:</h3>
    <?php
    if (empty($_GET['a']) || empty($_GET['b']) || empty($_GET['c'])) {
        echo "<p style='color: red;'>Ошибка: заполните все поля!</p>";
    } else {
        $a = (float)$_GET['a'];
        $b = (float)$_GET['b'];
        $c = (float)$_GET['c'];
        $sum = 4 * ($a + $b + $c);

        echo "<br> a = $a <br>";
        echo "b = $b <br>";
        echo "c = $c <br>";

        echo "Сумма длин рёбер: $sum";
    }
    ?>
    <br><a href="index3.php">Вернуться</a>
</body>
</html>