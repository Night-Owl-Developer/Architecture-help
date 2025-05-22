<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа 4</title>
</head>
<body>
    <h3>Лабораторная работа №4.</h3>
    <p class="group">Группа: 23ИД1б</p>
    <p class="group">Студент: Малютина Ю.В.</p>
    
    <form action="process.php" method="post">
        <!-- Поле ввода: Фамилия И. О. -->
        <label>Фамилия И. О.: <input type="text" name="full_name" required placeholder="Введите данные в виде Фамилия И. О."></label><br>

        <!-- Список с множественным выбором: Профессии -->
        <label>Хобби (выберите несколько):</label>
        <select name="professions[]" multiple size="4">
            <option value="автомеханик">автомеханик</option>
            <option value="крановщик">крановщик</option>
            <option value="инженер">инженер</option>
            <option value="аналитик">аналитик</option>
        </select><br>

        <!-- Радиокнопки: Любимый вид спорта -->
        <fieldset>
            <legend>Любимый вид спорта:</legend>
            <div>
                <input type="radio" id="sport1" name="sport" value="вольная борьба" required>
                <label for="sport1">вольная борьба</label>
            </div>
            <div>
                <input type="radio" id="sport2" name="sport" value="самбо">
                <label for="sport2">самбо</label>
            </div>
            <div>
                <input type="radio" id="sport3" name="sport" value="дзюдо">
                <label for="sport3">дзюдо</label>
            </div>
        </fieldset>

        <!-- Флажки: Хобби -->
        <fieldset>
            <legend>Хобби:</legend>
            <div>
                <input type="checkbox" id="hobby1" name="hobbies[]" value="книги">
                <label for="hobby1">книги</label>
            </div>
            <div>
                <input type="checkbox" id="hobby2" name="hobbies[]" value="кино">
                <label for="hobby2">кино</label>
            </div>
            <div>
                <input type="checkbox" id="hobby3" name="hobbies[]" value="садоводство">
                <label for="hobby3">садоводство</label>
            </div>
            <div>
                <input type="checkbox" id="hobby4" name="hobbies[]" value="кроссворды ">
                <label for="hobby4">кроссворды</label>
            </div>
        </fieldset>

        <!-- Комментарий -->
        <label>Комментарий: <textarea name="comment"></textarea></label><br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>