<html>
<body>
<form method="post">
    <h>Создать запись</h>
    <br>
    <input type="text" id="title" name="title" value="<?= $task->name ?>"><br>
    <textarea id="text" name="text"><?= $task->text ?></textarea><br>
    <input type="checkbox" id="status" name="status" <? if ($task->status == 1){ ?>checked <? } ?> >
    <input type="submit">
</form>

</body>
</html>


