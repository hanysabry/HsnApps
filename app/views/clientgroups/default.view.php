<div class="container">
    <a href="/clientgroups/create" class="button"><i class="fa fa-plus"></i> <?= $default_new_item ?></a>
    <table class="data">
        <thead>
            <tr>
                <th><?= $default_GroupId ?></th>
                <th><?= $default_GroupName ?></th>
                <th><?= $default_GroupIdaccount ?></th>
                <th><?= $default_GroupNameaccount ?></th>

                <th><?= $default_Nots ?></th>
                <th><?= $default_table_control ?></th>
            </tr>
        </thead>
        <tbody>
        <?php if(false !== $clientgroups): foreach ($clientgroups as $clientgroup): ?>
            <tr>
                <td><?= $clientgroup->GroupId ?></td>
                <td><?= $clientgroup->GroupName ?></td>
                <td><?= $clientgroup->GroupIdaccount ?></td>
                <td><?= $clientgroup->GroupNameaccount ?></td>
                <td><?= $clientgroup->Nots ?></td>
                <td>
                    <a href="/clientgroups/edit/<?= $clientgroup->GroupId ?>"><i class="fa fa-edit"></i></a>
                    <a href="/clients/delete/<?= $clientgroup->GroupId ?>" onclick="if(!confirm('<?= $default_table_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>