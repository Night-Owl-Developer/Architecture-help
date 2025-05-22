<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Количество продукции</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Статистика по продукции</h1>
    <a class="main" href="index.php">На главную</a>
    
    <?php
    require_once 'connection.php';
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));
    
    // Общее количество продукции
    $query = "SELECT COUNT(id) FROM products";
    $result = mysqli_query($link, $query);
    $count = mysqli_fetch_row($result);
    echo "<p>Общее количество продукции: ".$count[0]."</p>";
    
    // Количество продукции по предприятиям
        $query = "SELECT c.name, COUNT(p.id) as product_count
                FROM company c
                LEFT JOIN products p ON c.id = p.id_company
                GROUP BY c.name";  // Группируем по названию компании, а не по prod_name

        $result = mysqli_query($link, $query);

        // Проверка на ошибки выполнения запроса
        if (!$result) {
            die("Ошибка запроса: " . mysqli_error($link));
        }

        echo "<table class='table'>
            <tr>
                <th>Предприятие</th>
                <th>Количество продукции</th>
            </tr>";

        while ($row = mysqli_fetch_assoc($result)) {  // Используем ассоциативный массив
            echo "<tr>
                <td>".htmlspecialchars($row['name'])."</td>
                <td>".htmlspecialchars($row['product_count'])."</td>
            </tr>";
        }
        echo "</table>";
    ?>
</body>
</html>