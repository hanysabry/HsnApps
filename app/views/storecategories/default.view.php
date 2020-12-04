<div class="container">
    <a href="/storecategories/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>
    <table class="data">
        <thead>
            <tr>
                <th><?= $default_StorecategoryId ?></th>
                <th><?= $default_StorecategoryName ?></th>
                <th><?= $default_StorecategoryNameEng ?></th>
                <th><?= $default_city ?></th>
                <th><?= $default_StorecategoryManager ?></th>
                <th><?= $default_Email ?></th>
                <th><?= $default_Nots ?></th>
                <th><?= $default_MainaccountId ?></th>
                <th><?= $default_table_control ?></th>
            </tr>
        </thead>
        <tbody>
        <?php if(false !== $storecategories): foreach ($storecategories as $storecategorie): ?>
            <tr>
                <td><?= $storecategorie->StorecategoryId ?></td>
                <td><?= $storecategorie->StorecategoryName ?></td>
                <td><?= $storecategorie->StorecategoryNameEng ?></td>
                <td><?= $storecategorie->City ?></td>
                <td><?= $storecategorie->StorecategoryManager ?></td>
                <td><?= $storecategorie->Email ?></td>
                <td><?= $storecategorie->Nots ?></td>
                <td><?= $storecategorie->MainaccountId ?></td>
                <td>
                    <a href="/ $storecategories/edit/<?=  $storecategorie->StorecategoryId ?>"><i class="fa fa-edit"></i></a>
                    <a href="/$storecategories/delete/<?=  $storecategorie->StorecategoryId ?>" onclick="if(!confirm('<?= $default_table_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>