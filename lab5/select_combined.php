<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Предприятия и продукция</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Список предприятий и их продукции</h1>
    <a class="main" href="index.php">На главную</a> <br><br>
    
    <?php
    require_once 'connection.php';
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));
    
    $query = "SELECT e.id, e.name as company, e.city, 
                p.prod_name, p.model
        FROM company e
        LEFT JOIN products p ON e.id = p.id_company
        ORDER BY e.name";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

    if ($result) {
        echo "<table class='table'>
            <tr>
                <th>Предприятие</th>
                <th>Город</th>
                <th>Продукция</th>
                <th>Марка</th>
            </tr>";
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>".htmlspecialchars($row['company'])."</td>
                <td>".htmlspecialchars($row['city'])."</td>
                <td>".htmlspecialchars($row['prod_name'])."</td>
                <td>".htmlspecialchars($row['model'])."</td>
            </tr>";
        }
        echo "</table>";
    }
    
    mysqli_close($link);
    ?>
</body>
</html>