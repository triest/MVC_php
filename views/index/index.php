<input type="button" onclick="window.location.href = '/task/create';" value="������� ������"/>
<div class="container">
    <table class="table">
        <? foreach ($tasks as $item) {
            ?>
            <tr>
                <td><?= $item->name ?></td>
                <td><?= $item->email ?></td>
                <td><?= $item->text ?></td>
            </tr>
            <?
        } ?>
    </table>
    <? if ($num_pages > 1) {
        for ($i = 1; $i <= $num_pages; $i++) {
            if ($i!=$page) {
                ?>
                <a href="/?page=<?= $i ?>"> <?= $i ?></a>
                <?
            }else{
                ?>
                <?= $i ?>
    <?
            }
        }
    } ?>

</div>