<!DOCTYPE html>
<html>
<head>
    <title>Лабораторная работа №2 - Главная страница</title>
</head>
<link rel="stylesheet" href="main.css">
<body>
    <h1>Лабораторная работа №2. Главная страница</h1>
    <p style="color: green; font-weight:bold">Группа: 23ИД1б</p>
    <p style="color: green; font-weight:bold">Студент: Малютина Ю.В.</p>
    
    <form method="GET" action="calculate.php">
        <label for="a">Число A:</label>
        <input type="text" id="a" name="a" required><br><br>
        
        <label for="b">Число B:</label>
        <input type="text" id="b" name="b" required><br><br>
        
        <input type="submit" class="submit" value="Передать на вычисление">
    </form>
</body>
</html>