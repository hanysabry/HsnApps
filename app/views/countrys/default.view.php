<div class="container">
    <a href="/countrys/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>
    <table class="data">
        <thead>
        <tr>
            <th><?= $CountryId ?></th>
            <th><?= $CountryName ?></th>
            <th><?= $Nots ?></th>

       </tr>
        </thead>
        <tbody>
        <?php if(false !== $country): foreach ($country as $country): ?>
            <tr>
                    <td><?= $country->CountryId ?></td>
                <td><?= $country->CountryName ?></td>
                <td><?= $country->Nots ?></td>
                                     <td>
                    <a href="/countrys/edit/<?= $country->CountryId ?>"><i class="fa fa-edit"></i></a>
                    <a href="/countrys/delete/<?= $country->CountryId ?>" onclick="if(!confirm('<?= $text_table_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>