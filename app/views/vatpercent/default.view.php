<div class="container">
    <a href="/vatpercent/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>
    <table class="data">
        <thead>
        <tr>

            <th><?= $default_VatPercent ?></th>
            <th><?= $default_Nots ?></th>
        </tr>
        </thead>
        <tbody>
        <?php if(false !== $vatpercent): foreach ($vatpercent as $vatpercents): ?>
            <tr>

                <td><?= $vatpercents->VatPercent ?></td>
                <td><?= $vatpercents->Nots ?></td>
             <td>
 <a href="/vatpercent/edit/<?= $vatpercents->VatId ?>"><i class="fa fa-edit"></i></a>
 <a href="/vatpercent/delete/<?= $vatpercents->VatId ?>" onclick="if(!confirm('<?= $text_table_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>