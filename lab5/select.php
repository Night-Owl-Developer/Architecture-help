<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Предприятия</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Список предприятий</h1>
        <div class="btn-func">
            <a class="add_c" href="add.php">Добавить предприятие</a>
            <a href="index.php" class="main">На главную</a>
        </div>
        
        <?php
        require_once 'connection.php';
        $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link));
        
        $query = "SELECT * FROM company";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        
        if ($result) {
            echo "<table class='table'>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Город</th>
                    <th>Действия</th>
                </tr>";
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['city']."</td>
                    <td>
                        <a class='add' href='add_product.php?id=".$row['id']."'>Добавить</a> 
                        <a class='edit' href='update.php?id=".$row['id']."'>Изменить</a>  
                        <a class='delete' href='delete.php?id=".$row['id']."'>Удалить</a>  
                        
                    </td>
                </tr>";
            }
            echo "</table>";
        }
        
        mysqli_close($link);
        ?>
    </div>
</body>
</html>