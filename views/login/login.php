<?php
    /**
     * Created by PhpStorm.
     * User: triest
     * Date: 29.02.2020
     * Time: 13:08
     */
?>

<form action="/login" method="post">
    <? if (isset($error) && $error == true) {
        echo "Ошибка валидации или неверные логин или раполь!";
        echo "<br>";
    } ?>
    <label> Логин</label>
    <input type="text" id="email" name="email" required><br>
    <label> Пароль:</label>
    <input type="text" id="password" name="password" required><br>
    <input type="submit">
    <a href="/">Назад</a>
</form>