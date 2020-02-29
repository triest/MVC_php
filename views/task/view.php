<html>
<body>
<form method="post">
    <br>
    <input type="text" id="title" name="title" value="<?= $task->name ?>" disabled><br>
    <textarea id="text" name="text" disabled><?= $task->text ?></textarea><br>
    <? if ($task->status == 1){ ?> Отредактированно администратором <? } ?>
</form>

</body>
</html>


