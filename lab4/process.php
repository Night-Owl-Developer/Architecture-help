<?php
// Проверка обязательных полей
if (empty($_POST['full_name']) || empty($_POST['sport'])) {
    die("Ошибка: заполните поле 'Фамилия И. О.' и выберите вид спорта!");
}

// Обработка данных
$full_name = htmlentities($_POST['full_name']);
$sport = htmlentities($_POST['sport']);
$comment = isset($_POST['comment']) ? htmlentities($_POST['comment']) : '';

// Обработка профессий (множественный выбор)
$professions = isset($_POST['professions']) ? 
    array_map('htmlentities', $_POST['professions']) : 
    array('Не выбрано');

// Обработка хобби (флажки)
$hobbies = isset($_POST['hobbies']) ? 
    array_map('htmlentities', $_POST['hobbies']) : 
    array('Не выбрано');

// Запись в файл (используем fwrite)
$filename = "data.txt";
$file = fopen($filename, "w") or die("Не удалось создать файл!");

fwrite($file, "ФИО: $full_name\n");
fwrite($file, "Любимый спорт: $sport\n");
fwrite($file, "Профессии: " . implode(", ", $professions) . "\n");
fwrite($file, "Хобби: " . implode(", ", $hobbies) . "\n");
fwrite($file, "Комментарий: $comment\n");

fclose($file);

// Чтение данных (операции 1, 4, 5)
echo "<h3>1. Чтение через file() без параметров:</h3>";
$lines = file($filename);
echo "<pre>";
var_dump($lines);
echo "</pre>";

echo "<h3>4. Чтение через file() с параметрами:</h3>";
$lines_filtered = file(
    $filename, 
    FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES
);
echo "<pre>";
var_dump($lines_filtered);
echo "</pre>";

echo "<h3>5. Чтение через fgets():</h3>";
$file = fopen($filename, "r");
while (!feof($file)) {
    $line = htmlentities(fgets($file));
    echo $line . "<br>";
}
fclose($file);

// Вывод размера файла
$size = filesize($filename);
echo "<p>Размер файла: $size байт (" . round($size / 1024 / 1024, 2) . " MB)</p>";
?>