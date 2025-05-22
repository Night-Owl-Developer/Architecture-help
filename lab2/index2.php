<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №2 - Вариант 12</title>
</head>
<body>
    <h1>Лабораторная работа №2. Передача данных с формой</h1>
    <p style="color: green; font-weight:bold">Группа: 23ИД1б</p>
    <p style="color: green; font-weight:bold">Студент: Малютина Ю.В.</p>

    <form method="GET">
        Длина (a): <input type="number" name="a" step="0.01" required><br>
        Ширина (b): <input type="number" name="b" step="0.01" required><br>
        Высота (c): <input type="number" name="c" step="0.01" required><br>
        <input type="submit" value="Рассчитать">
    </form>

    <?php
    if (!empty($_GET)) {
        if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
            $a = (float)$_GET['a'];
            $b = (float)$_GET['b'];
            $c = (float)$_GET['c'];

            echo "<br> a = $a <br>";
            echo "b = $b <br>";
            echo "c = $c <br>";

            $sum = 4 * ($a + $b + $c);
            echo "<h3>Результат:</h3>";
            echo "Сумма длин рёбер: $sum";
        } else {
            echo "<p style='color: red;'>Ошибка: заполните все поля!</p>";
        }
    }
    ?>
    
</body>
</html>