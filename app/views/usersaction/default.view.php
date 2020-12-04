<div class="container">
    <a href="/users/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>
    <table class="data">
        <thead>
        <tr>
            <th><?= $text_UserId ?></th>
            <th><?= $text_User_login ?></th>
            <th><?= $text_User_log_out ?></th>
            <th><?= $text_TableName ?></th>
            <th><?= $text_ActionColumn ?></th>
            <th><?= $text_ActionTitle ?></th>
            <th><?= $text_TimeAt ?></th>
        </tr>
        </thead>
        <tbody>
        <?php if(false !== $usersactions): foreach ($usersactions as $usersactions): ?>
            <tr>
                <td><?= $usersactions->UserId ?></td>
                <td><?= $usersactions->User_login ?></td>
                <td><?= $usersactions->User_log_out ?></td>
                <td><?= $usersactions->TableName ?></td>
                <td><?= $usersactions->ActionTitle ?></td>
                <td><?= $usersactions->TimeAt ?></td>
                <td>
                    <a href="/usersaction/edit/<?= $usersactions->ActionId ?>"><i class="fa fa-edit"></i></a>
                    <a href="/users/delete/<?= $usersactions->ActionId ?>" onclick="if(!confirm('<?= $text_table_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>
