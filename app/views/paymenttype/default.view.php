<div class="container">
    <a href="/paymenttype/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>
    <table class="data">
        <thead>
            <tr>
                <th><?= $default_PaymentId ?></th>
                <th><?= $default_PaymentName ?></th>
                <th><?= $default_Nots ?></th>
            </tr>
        </thead>
        <tbody>
        <?php if(false !== $paymenttype): foreach ($paymenttype as $paymenttypes): ?>
            <tr>
                <td><?= $paymenttypes->Id ?></td>
                <td><?= $paymenttypes->Name ?></td>
                <td><?= $paymenttypes->Nots ?></td>
                <td>
                    <a href="/paymenttype/edit/<?= $paymenttypes->Id ?>"><i class="fa fa-edit"></i></a>
                    <a href="/paymenttype/delete/<?= $paymenttypes->Id ?>" onclick="if(!confirm('<?= $text_table_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>