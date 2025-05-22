<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Добавить продукцию</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Добавить новую продукцию</h1>
    <a class="main" href="select.php">Назад к списку предприятий</a>
    
    <?php
    if (isset($_GET['id'])) {
        require_once 'connection.php';
        $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link));
        
        $enterprise_id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));
        
        // Получаем информацию о предприятии
        $query = "SELECT name FROM company WHERE id = '$enterprise_id'";
        $result = mysqli_query($link, $query);
        $enterprise = mysqli_fetch_assoc($result);
        
        echo "<h2>Предприятие: ".$enterprise['name']."</h2>";
        
        if (isset($_POST['product_name']) && isset($_POST['model'])) {
            $product_name = htmlentities(mysqli_real_escape_string($link, $_POST['product_name']));
            $model = htmlentities(mysqli_real_escape_string($link, $_POST['model']));
            
            $query = "INSERT INTO products VALUES(NULL, '$product_name', '$model', '$enterprise_id')";
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
            
            if ($result) {
                echo "<p style='color:green;'>Продукция успешно добавлена!</p>";
            }
        }
        
        echo "<form method='POST'>
            <input type='hidden' name='enterprise_id' value='$enterprise_id'>
            
            <p>Название продукции:<br>
            <input type='text' name='product_name' required></p>
            
            <p>Марка:<br>
            <input type='text' name='model' required></p>
            
            <input class='add' type='submit' value='Добавить'>
        </form>";
        
        mysqli_close($link);
    } else {
        echo "<p style='color:red;'>Не указано предприятие!</p>";
    }
    ?>
</body>
</html>