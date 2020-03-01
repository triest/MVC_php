<input type="button" onclick="window.location.href = '/task/create';" value="Создать задачу"/>
<div class="container">
    <table class="table">
        <thead>
        <th><a href="/?"></a> Название</th>
        <th>email</th>
        <th>выполненно</th>
        <th>отредактировано администратором</th>
        </thead>
        <tbody>
        <? foreach ($tasks as $item) {
            ?>
            <tr>
                <td><a href="/task/view?id=<?= $item->id ?>"><?= $item->name ?></a></td>
                <td><?= $item->email ?></td>
                <td>
                    <? if ($item->status == 1) {
                        echo "нет";
                    } else {
                        echo "да";
                    } ?>
                </td>
                <td>
                    <? if ($item->edit == 1) {
                        echo "да";
                    } else {
                        echo "нет";
                    } ?>
                </td>
                <? if ($_SESSION['auth_user'] == "admin") { ?>
                    <td><a href="/task/edit?id=<?= $item->id ?>">Редактировать</a></td>
                <? } ?>
            </tr>
            <?
        } ?>
        </tbody>
    </table>
    <? if ($num_pages > 1) {
        for ($i = 1; $i <= $num_pages; $i++) {
            if ($i != $page) {
                ?>
                <a href="/?page=<?= $i ?>"> <?= $i ?></a>
                <?
            } else {
                ?>
                <?= $i ?>
                <?
            }
        }
    } ?>

</div>