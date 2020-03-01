
<form method="post">
    <? if (isset($error)&&$error == false) { ?>
        <label><font color="red">Ошибка валидации!. Проверьте введенные данные.</font></label>
    <?
    } ?>
    <br>
    <h>Создать запись</h>
    <br>
    <label>Имя пользоателя</label>
    <input type="text" id="title" name="title" required><br>
    <label>Имя email</label>
    <input type="text" id="email" name="email" required><br>
    <label>Описание</label>
    <textarea id="text" name="text" required></textarea><br>
    <input type="submit">
</form>
<? if ($page == 1) { ?>
    <a href="/">Назад</a>
<? } else { ?>
    <a href="/?page=<?= $page ?>">Назад</a>
<? } ?>



