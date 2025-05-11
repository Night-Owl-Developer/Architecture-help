<!DOCTYPE html>
<html>
<head>
    <title>Результаты вычислений</title>
    <link rel="stylesheet" media="screen" href="styles.css"/>
</head>
<body>
    <h2>Результаты обработки данных:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $x = $_POST["x"];
        $b = $_POST["b"];
        $action = $_POST["action"];

        // Проверка на пустые значения
        if (empty($a) || empty($x) || empty($b)) {
            echo "<p class='error'>Ошибка: все поля должны быть заполнены.</p>";
            return;
        }

        // Проверка на числовые значения
        if (!is_numeric($a) || !is_numeric($x) || !is_numeric($b)) {
            echo "<p class='error'>Ошибка: введенные значения должны быть числами.</p>";
            return;
        }

        // Вычисления
        $x_squared = $x * $x;
        $result_add = $a * $x_squared + $b;
        $result_subtract = $a * $x_squared - $b;

        echo "<p>Исходные данные: a = $a, x = $x, b = $b</p>";

        switch ($action) {
            case "add":
                echo "<p>Результат вычисления aх² + b = $result_add</p>";
                break;
            case "subtract":
                echo "<p>Результат вычисления aх² - b = $result_subtract</p>";
                break;
            case "both":
                echo "<p>Результат вычисления aх² + b = $result_add</p>";
                echo "<p>Результат вычисления aх² - b = $result_subtract</p>";
                break;
            default:
                echo "<p class='error'>Ошибка: неизвестное действие.</p>";
        }
    } else {
        echo "<p class='error'>Ошибка: данные не были отправлены.</p>";
    }
    ?>
    <a href="index.php">Вернуться к форме</a>
</body>
</html>