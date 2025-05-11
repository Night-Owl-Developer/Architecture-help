<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты обработки</title>
</head>
<body>
    <h1>Результаты обработки формы</h1>

    <?php
        // Проверка метода запроса
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            die("Ошибка: данные должны быть отправлены методом POST");
        }

        // Получение данных из формы
        $name = trim($_POST["name"] ?: ""); // trim() удаляет пробелы в начале и конце строки
        $professions = $_POST["profession"] ?: [];
        $sport = trim($_POST["sport"] ?: "");
        $comment = trim($_POST["comment"] ?: "");

        // Обработка флажков
        $hobbies = [];
        if (!empty($_POST["hobby1"])) $hobbies[] = "Книги";
        if (!empty($_POST["hobby2"])) $hobbies[] = "Кино";
        if (!empty($_POST["hobby3"])) $hobbies[] = "Садоводство";
        if (!empty($_POST["hobby4"])) $hobbies[] = "Кроссворды";
        $hobbiesStr = implode(", ", $hobbies);

        // Запись данных в файл (операция 1 - fwrite)
        $filename = "data.txt";
        $fd = fopen($filename, "w") or die("Не удалось создать файл");

        // Функция для проверки и записи строки
        function writeIfNotEmpty($handle, $label, $value) {
            if (!empty($value)) {
                $str = "$label: $value\n";
                fwrite($handle, $str);
            }
        }

        // Запись данных с проверкой на пустоту
        writeIfNotEmpty($fd, "ФИО", $name);

        if (!empty($professions)) {
            $str = "Профессии: " . implode(", ", $professions) . "\n";
            fwrite($fd, $str);
        }

        writeIfNotEmpty($fd, "Любимый вид спорта", $sport);

        if (!empty($hobbiesStr)) {
            $str = "Хобби: " . $hobbiesStr . "\n";
            fwrite($fd, $str);
        }

        writeIfNotEmpty($fd, "Комментарий", $comment);

        fclose($fd);

        // Вывод сообщения о успешной записи
        echo "<p>Данные успешно записаны в файл!</p>";

        // Чтение данных из файла (операции 1, 4, 5)
        echo "<h2>Содержимое файла:</h2>";

        // Операция 1: file + Var_dump без параметров
        echo "<h3>1. file + Var_dump без параметров:</h3>";
        $arr = file($filename);
        echo "<pre>";
        var_dump($arr);
        echo "</pre>";

        // Операция 4: file + Var_dump + два параметра
        echo "<h3>2. file + Var_dump + два параметра (FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES):</h3>";
        $arr = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        echo "<pre>";
        var_dump($arr);
        echo "</pre>";

        // Операция 5: fgets (с проверкой на пустые строки)
        echo "<h3>3. Чтение с помощью fgets:</h3>";
        $fd = fopen($filename, "r") or die("Не удалось открыть файл");
        while(!feof($fd)) {
            $line = fgets($fd);
            if ($line !== false) { // Проверяем, что строка прочитана
                $line = htmlentities(trim($line)); // Обрабатываем строку
                if ($line !== "") { // Проверяем, что строка не пустая
                    echo $line . "<br>";
                }
            }
        }
        fclose($fd);
    ?>


</body>
</html>