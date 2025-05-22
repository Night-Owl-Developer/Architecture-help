<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Продукция</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Список продукции</h1>
    <a class="main" href="index.php">На главную</a> <br><br>
    
    <?php
    require_once 'connection.php';
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));
    
        $query = "SELECT p.id, p.prod_name, p.model, c.name AS company_name, c.city 
          FROM products p 
          LEFT JOIN company c ON p.id_company = c.id";
        $result = mysqli_query($link, $query);

        if (!$result) {
            die("Ошибка запроса: " . mysqli_error($link));
        }
            
            if ($result) {
                echo "<table class='table'>
                    <tr>
                        <th>ID товара</th>
                        <th>Название</th>
                        <th>Модель</th>
                        <th>Компания</th>
                        <th>Город</th>
                    </tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>".htmlspecialchars($row['id'])."</td>
                        <td>".htmlspecialchars($row['prod_name'])."</td>
                        <td>".htmlspecialchars($row['model'])."</td>
                        <td>".htmlspecialchars($row['company_name'])."</td>
                        <td>".htmlspecialchars($row['city'])."</td>
                    </tr>";
                }

                echo "</table>";
            }
            
            mysqli_close($link);
    ?>
</body>
</html>