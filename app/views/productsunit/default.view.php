<div class="container">
<!--    <input class="no_float" type="submit" name="Pdf" value="--><?//= $text_label_save ?><!--">-->
    <a href="/productsunit/print" style="margin-right:5px " class="button" name="Pdf"  ><i class="fa fa-file-pdf-o"></i></i> <?= $text_Pdf ?></a>

    <a href="/productsunit/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>


    <table class="data">
        <thead>

        <tr>
            <th><?= $default_UnitId ?></th>
            <th><?= $default_UnitName ?></th>
            <th><?= $default_ProductId ?></th>
            <th><?= $default_Quantity ?></th>
            <th><?= $default_QuantityOfNo ?></th>
            <th><?= $default_QuantityMin ?></th>
            <th><?= $default_QuantityMax ?></th>
            <th><?= $default_VatPercent ?></th>
            <th><?= $default_Nots ?></th>

        </tr>
        </thead>
        <tbody>
        <?php if(false !== $productsunit): foreach ($productsunit as $productsunits): ?>
            <tr>
                <td><?= $productsunits->UnitId ?></td>
                <td><?= $productsunits->UnitName ?></td>
                <td><?= $productsunits->ProductId ?></td>
                <td><?= $productsunits->Quantity ?></td>
                <td><?= $productsunits->QuantityOfNo ?></td>
                <td><?= $productsunits->QuantityMin ?></td>
                <td><?= $productsunits->QuantityMax ?></td>
                <td><?= $productsunits->VatPercent ?></td>
                <td><?= $productsunits->Nots ?></td>

                <td>
                    <a href="/productsunit/edit/<?= $productsunits->UnitId ?>"><i class="fa fa-edit"></i></a>
                    <a href="/productsunit/delete/<?= $productsunits->UnitId ?>" onclick="if(!confirm('<?= $text_table_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>