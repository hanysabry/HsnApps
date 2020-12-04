<div class="container">
<!--    <input class="no_float" type="submit" name="Pdf" value="--><?//= $text_label_save ?><!--">-->
    <a href="/users/print" style="margin-right:5px " class="button" name="Pdf"  ><i class="fa fa-file-pdf-o"></i></i> <?= $text_Pdf ?></a>

    <a href="/users/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>


    <table class="data">
        <thead>

        <tr>
            <th><?= $text_table_username ?></th>
            <th><?= $text_table_group ?></th>
            <th><?= $text_table_email ?></th>
            <th><?= $text_table_subscription_date ?></th>
            <th><?= $text_table_last_login ?></th>
            <th><?= $text_table_control ?></th>
            <th><?= $text_table_status ?></th>

        </tr>
        </thead>
        <tbody>
        <?php if(false !== $users): foreach ($users as $user): ?>
            <tr>
                <td><?= $user->Username ?></td>
                <td><?= $user->GroupName ?></td>
                <td><?= $user->Email ?></td>
                <td><?= $user->SubscriptionDate ?></td>
                <td><?= $user->LastLogin ?></td>
                <td><?= $user->Status ?></td>

                <td>
                    <a href="/users/edit/<?= $user->UserId ?>"><i class="fa fa-edit"></i></a>
                    <a href="/users/delete/<?= $user->UserId ?>" onclick="if(!confirm('<?= $text_table_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>