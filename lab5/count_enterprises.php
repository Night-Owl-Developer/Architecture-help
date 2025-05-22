<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Количество предприятий</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Статистика по предприятиям</h1>
    <a class="main" href="index.php">На главную</a>
    
    <?php
    require_once 'connection.php';
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));
    
    // Общее количество предприятий
    $query = "SELECT COUNT(id) FROM company";
    $result = mysqli_query($link, $query);
    $count = mysqli_fetch_row($result);
    echo "<p>Общее количество предприятий: ".$count[0]."</p>";
    
    // Количество предприятий по городам
    $query = "SELECT city, COUNT(id) FROM company GROUP BY city";
    $result = mysqli_query($link, $query);
    
    echo "<table class='table'>
        <tr>
            <th>Город</th>
            <th>Количество предприятий</th>
        </tr>";
    
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr>
            <td>".$row[0]."</td>
            <td>".$row[1]."</td>
        </tr>";
    }
    echo "</table>";
    
    mysqli_close($link);
    ?>
</body>
</html>