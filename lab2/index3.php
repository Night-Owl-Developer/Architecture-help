<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №2 - Главная страница</title>
</head>
<body>
    <h1>Лабораторная работа №2. Главная страница</h1>
    <p style="color: green; font-weight:bold">Группа: 23ИД1б</p>
    <p style="color: green; font-weight:bold">Студент: Малютина Ю.В.</p>

    <form action="result.php" method="GET">
        Длина (a): <input type="number" name="a" step="0.01" required><br>
        Ширина (b): <input type="number" name="b" step="0.01" required><br>
        Высота (c): <input type="number" name="c" step="0.01" required><br>
        <input type="submit" value="Рассчитать">
    </form>
</body>
</html>