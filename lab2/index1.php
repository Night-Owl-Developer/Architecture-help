<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №2 - Вариант 12</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>Лабораторная работа №2. Передача данных методом GET без формы</h1>
    <p style="color: green; font-weight:bold">Группа: 23ИД1б</p>
    <p style="color: green; font-weight:bold">Студент: Малютина Ю.В.</p>

    <?php
        if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
            $a = (float)$_GET['a'];
            $b = (float)$_GET['b'];
            $c = (float)$_GET['c'];
            $sum = 4 * ($a + $b + $c);
            echo "<h3>Результат:</h3>";
            echo "Сумма длин рёбер: $sum";
        } else {
            echo "<p>Нажмите на ссылку для автоматической передачи параметров:</p>";
        echo '<a href="http://localhost/lab2/index1.php?a=5&b=3&c=2">Передать a=5, b=3, c=2</a>';
        }
    ?>
</body>
</html>