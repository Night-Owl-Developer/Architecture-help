<!DOCTYPE html>
<html>
<head>
    <title>Лабораторная работа №3</title>
    <link rel="stylesheet" media="screen" href="styles.css"/>
</head>
<body>
    <h3>Лабораторная работа №3. Передача данных методом POST</h3>
    <p class="group">Группа: 23ИД1б</p>
    <p class="group">Студент: Малютина Ю.В.</p>
    
    <form class="contact_form" action="calculate.php" method="post">
        <h2>Форма для ввода данных <br><span class="required_notification">* обязательные поля</span></h2>
        <ul>
            <li>
                Введите значение a: <span class="required_notification">*</span> <input type="text" name="a" required>
            </li>
            <li>
                Введите значение x: <span class="required_notification">*</span> <input type="text" name="x" required>
            </li>
            <li>
                Введите значение b: <span class="required_notification">*</span> <input type="text" name="b" required>
            </li>
            <li>
                Выберите действие:
                <select name="action">
                    <option value="add">aх² + b</option>
                    <option value="subtract">aх² - b</option>
                    <option value="both">Оба значения</option>
                </select>
            </li>
            <li>
                <button class="submit" type="submit">Вычислить</button>
            </li>
        </ul>
    </form>
</body>
</html>