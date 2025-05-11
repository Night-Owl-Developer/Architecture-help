<!DOCTYPE html>
<html>
<head>
    <title>Лабораторная работа №2 - Вариант 12</title>
</head>
<link rel="stylesheet" href="main.css">
<body>
    <h1>Лабораторная работа №2. Передача данных с формой</h1>
    <p style="color: green; font-weight:bold">Группа: 23ИД1б</p>
    <p style="color: green; font-weight:bold">Студент: Малютина Ю.В.</p>
    
    <form method="GET" action="">
        <label for="a">Число A:</label>
        <input type="text" id="a" name="a" required>
        
        <label for="b">Число B:</label>
        <input type="text" id="b" name="b" required><br><br>
        
        <input type="submit" class="submit" value="Вычислить сумму">
    </form>
    
    <?php
    if (!empty($_GET['a']) && !empty($_GET['b'])) {
        if (is_numeric($_GET['a']) && is_numeric($_GET['b'])) {
            $a = $_GET['a'];
            $b = $_GET['b'];
            $sum = $a + $b;
            echo "<p>Введенные числа: a = $a, b = $b</p>";
            echo "<p>Сумма чисел: $sum</p>";
        } else {
            echo "<p>Ошибка: введены нечисловые значения</p>";
        }
    }
    ?>
</body>
</html>