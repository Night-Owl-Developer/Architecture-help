<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Добавить предприятие</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Добавить новое предприятие</h1>
    <a class="main" href="select.php">Назад к списку</a>
    
    <form method="POST">
        <p>Название предприятия:<br>
        <input type="text" name="name" required></p>
        
        <p>Город:<br>
        <input type="text" name="city" required></p>
        
        <input type="submit" value="Добавить" class='add'>
    </form>
    
    <?php
    if (isset($_POST['name']) && isset($_POST['city'])) {
        require_once 'connection.php';
        $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link));
        
        $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
        $city = htmlentities(mysqli_real_escape_string($link, $_POST['city']));
        
        $query = "INSERT INTO company VALUES(NULL, '$name', '$city')";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        
        if ($result) {
            echo "<p style='color:green;'>Предприятие успешно добавлено!</p>";
        }
        
        mysqli_close($link);
    }
    ?>
</body>
</html>