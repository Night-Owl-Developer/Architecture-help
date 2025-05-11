<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №4</title>
    <link rel="stylesheet" media="screen" href="styles.css"/>
</head>
<body>
    <h3>Лабораторная работа №4. Работа с файлами</h3>
    <p class="group">Группа: 23ИД1б</p>
    <p class="group">Студент: Малютина Ю.В.</p>
    <form class="contact_form" action="process.php" method="post">
        <h3>Форма для ввода данных</h3>
        <div>
            <label for="name">Фамилия И. О.:</label>
            <input type="text" id="name" name="name" required placeholder="Иванов И.И.">
        </div>

        <div>
            <label>Профессия (выберите только одну):</label>
            <select name="profession[]" size="3" multiple="multiple">
                <option value="автомеханик">автомеханик</option>
                <option value="крановщик">крановщик</option>
                <option value="инженер">инженер</option>
                <option value="аналитик">аналитик</option>
            </select>
        </div>

        <fieldset>
            <legend>Любимый вид спорта:</legend>
            <div>
                <input type="radio" id="sport1" name="sport" value="вольная борьба" checked>
                <label for="sport1" class="label">вольная борьба</label>
            </div>
            <div>
                <input type="radio" id="sport2" name="sport" value="самбо">
                <label for="sport2" class="label">самбо</label>
            </div>
            <div>
                <input type="radio" id="sport3" name="sport" value="дзюдо">
                <label for="sport3" class="label">дзюдо</label>
            </div>
        </fieldset>

        <fieldset>
            <legend>Хобби:</legend>
            <div>
                <input type="checkbox" id="hobby1" name="hobby1">
                <label for="hobby1" class="label">книги</label>
            </div>
            <div>
                <input type="checkbox" id="hobby2" name="hobby2">
                <label for="hobby2" class="label">кино</label>
            </div>
            <div>
                <input type="checkbox" id="hobby3" name="hobby3">
                <label for="hobby3" class="label">садоводство</label>
            </div>
            <div>
                <input type="checkbox" id="hobby4" name="hobby4">
                <label for="hobby4" class="label">кроссворды</label>
            </div>
        </fieldset>

        <div style="margin-top: 10px;">
            <label for="comment">Комментарий:</label>
            <textarea class="comment" id="comment" name="comment" placeholder="Текст от себя"></textarea>
        </div>

        <button class="submit" type="submit">Отправить</button>
    </form>
</body>
</html>