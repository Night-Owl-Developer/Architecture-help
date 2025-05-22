<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №2 - Работа с формой</title>
    <style>
        input:invalid { border: 2px solid red; } /*не верно*/
        input:valid { border: 2px solid green; } /*верно*/
    </style>
</head>
<body>
    <h1>Лабораторная работа №2. Работа с формой</h1>
    <p class="green">Группа: 23ИД1б</p>
    <p class="green">Студент: Малютина Ю.В.</p>

    <form action="index4.php" method="get" class="form">
        <label for="">Login</label>
        <input type="text" name="log" id="" placeholder="Введите логин" pattern="[a-z0-9_]{10}"><br><br>
        <label for="">Password</label>
        <input type="text" name="pas" id="" placeholder="Введите пароль" pattern="[a-z0-9_]{10}"><br><br>
        <label for="">Url</label>
        <input type="url" name="url" id="" placeholder="Введите url"><br><br>
        <label for="">Email</label>
        <input type="email" name="email" id="" placeholder="Введите email" ><br><br>
        <label for="">Price</label>
        <input type="text" name="price" pattern="\d+(,\d{1,3})" id="" placeholder="Введите цену"><br><br>
        <input type="submit" class="submit" value="save">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET)) {
        echo "<h2>Введенные данные:</h2>";
        foreach ($_GET as $key => $value) {
            echo "<p>$key: $value</p>";
        }
    }
    ?>
</body>
</html>