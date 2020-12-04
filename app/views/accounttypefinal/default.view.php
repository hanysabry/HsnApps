<div class="container">
    <a href="/accounttypefinal/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>
    <table class="data">
        <thead>
        <tr>
            <th><?= $default_accountTypeId ?></th>
            <th><?= $default_accountTypeName ?></th>
            <th><?= $default_accountTypeNameEng ?></th>
            <th><?= $default_Nots ?></th>

       </tr>
        </thead>
        <tbody>
        <?php if(false !== $accounttypefinal): foreach ($accounttypefinal as $accounttypes): ?>
            <tr>
                 <td><?= $accounttypes->AccountTypefinalId ?></td>
                <td><?= $accounttypes->AccountTypefinalName ?></td>
                <td><?= $accounttypes->AccountTypefinalNameEng ?></td>
                <td><?= $accounttypes->Nots ?></td>
                                     <td>
                    <a href="/accounttypefinal/edit/<?=$accounttypes->AccountTypefinalId ?>"><i class="fa fa-edit"></i></a>
                    <a href="/accounttypefinal/delete/<?= $accounttypes->AccountTypefinalId ?>" onclick="if(!confirm('<?= $default_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>