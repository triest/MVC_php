<html>
<body>
<form method="post">
    <br>
    <input type="text" id="title" name="title" value="<?= $task->name ?>" disabled><br>
    <input type="text" id="email" name="email" value="<?= $task->email ?>" disabled><br>
    <textarea id="text" name="text" disabled><?= $task->text ?></textarea><br>
    <? if ($task->status == 1) { ?> Отредактированно администратором <? } ?>
</form>
<? if ($page == 1) { ?>
    <a href="/">Назад</a>
<? } else { ?>
    <a href="/?page=<?= $page ?>">Назад</a>
<? } ?>
</body>
</html>


