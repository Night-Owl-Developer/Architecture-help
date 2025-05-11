<!DOCTYPE html>
<html>
<head>
    <title>Лабораторная работа №2 - Вариант 12</title>
</head>
<link rel="stylesheet" href="main.css">
<body>
    <h1>Лабораторная работа №2. Передача данных методом GET без формы</h1>
    <p style="color: green; font-weight:bold">Группа: 23ИД1б</p>
    <p style="color: green; font-weight:bold">Студент: Малютина Ю.В.</p>
    
    <?php
    if (!empty($_GET['a']) && !empty($_GET['b'])) {
        $a = $_GET['a'];
        $b = $_GET['b'];
        $sum = $a + $b;
        echo "<p>Переданные параметры: a = $a, b = $b</p>";
        echo "<p>Сумма чисел: $sum</p>";
    } else {
        echo "<p>Параметры не переданы или переданы неверно</p>";
    }
    ?>
    
    <p>Пример ссылки для передачи параметров: 
    <a href="index1.php?a=5&b=3">index1.php?a=5&b=3</a></p>
</body>
</html>