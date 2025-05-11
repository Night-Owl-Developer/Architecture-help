<!DOCTYPE html>
<html>
<head>
    <title>Лабораторная работа №2 - Вычисления</title>
</head>
<body>
    <h1>Результаты вычислений</h1>
    
    <?php
    if (!empty($_GET['a']) && !empty($_GET['b'])) {
        if (is_numeric($_GET['a']) && is_numeric($_GET['b'])) {
            $a = $_GET['a'];
            $b = $_GET['b'];
            $sum = $a + $b;
            echo "<p>Полученные числа: a = $a, b = $b</p>";
            echo "<p>Сумма чисел: $sum</p>";
        } else {
            echo "<p>Ошибка: получены нечисловые значения</p>";
        }
    } else {
        echo "<p>Ошибка: параметры не переданы</p>";
    }
    ?>
    
    <p><a href="index3.php">Вернуться назад</a></p>
</body>
</html>