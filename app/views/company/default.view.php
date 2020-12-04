<div class="container">
    <a href="/company/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>
    <table class="data" style="display: block"  >
        <thead>
            <tr>
                <th><?= $text_label_Name_Company ?></th>
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
        <?php if(false !== $companys): foreach ($companys as $company): ?>
            <tr>
                <td><?= $company->NameCompany ?></td>
                <td><?= $company->UserId ?></td>
                <td><?=$company->Address1 ?></td>
                <td><?= $company->Email1?></td>
                <td><?= $company->PhoneNumber1?></td>
                <td><?= $company->SEGEL?></td>
                <td><?= $company->VatNo?></td>
                <td><?= $company->Facebook?></td>
                <td><?= $company->Twitter?></td>
                <td><?= $company->Instgram?></td>
                <td><?= $company->snap?></td>
                <td>
       <a href="/company/edit/<?= $company->CompanyId ?>"><i class="fa fa-edit"></i></a>
      <a href="/company/delete/<?=  $company->CompanyId ?>" onclick="if(!confirm('<?= $text_table_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                              </td>
            </tr>
</div>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>