<div class="container">
    <a href="/branchs/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>
    <table class="data" style="display: block"  >
        <thead>
            <tr>
                <th><?= $text_label_id_branch ?></th>
                <th><?= $text_label_Name_branch ?></th>
                <th><?= $text_label_CompanyId ?></th>
                <th><?= $text_label_UserId ?></th>
                <th><?= $text_label_Address1 ?></th>
                <th><?= $text_label_Email1 ?></th>
                <th><?= $text_label_TEL1 ?></th>
                <th><?= $text_label_SEGEL ?></th>
                <th><?= $text_label_VatNo ?></th>
                <th><?= $text_label_Facebook ?></th>
                <th><?= $text_label_Twitter ?></th>
                <th><?= $text_label_Instgram ?></th>
                <th><?= $text_label_snap ?></th>
                <th><?= $text_table_control ?></th>
            </tr>
        </thead>
        <tbody>
        <?php if(false !== $branchs): foreach ($branchs as $branch): ?>
            <tr>
                <td><?=$branch->BranchesId ?></td>
                <td><?=$branch->NameBranch ?></td>
                <td><?=$branch->CompanyId ?></td>
                <td><?=$branch->Address1 ?></td>
                <td><?= $branch->Email1?></td>
                <td><?= $branch->PhoneNumber1?></td>
                <td><?= $branch->SEGEL?></td>
                <td><?= $branch->VatNo?></td>
                <td><?= $branch->Facebook?></td>
                <td><?= $branch->Twitter?></td>
                <td><?= $branch->Instgram?></td>
                <td><?= $branch->snap?></td>
                <td><?= $branch->NameCompany ?></td>
                <td><?= $branch->UserId ?></td>
                <td>
       <a href="/company/edit/<?= $branch->CompanyId ?>"><i class="fa fa-edit"></i></a>
      <a href="/company/delete/<?=  $branch->CompanyId ?>" onclick="if(!confirm('<?= $text_table_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                              </td>
            </tr>
</div>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>