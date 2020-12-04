

    <a href="/accountgeneral/print" style="margin-right:5px " class="button" name="Pdf"  ><i class="fa fa-file-pdf-o"></i></i> <?= $text_Pdf ?></a>

    <a href="/accountgeneral/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>

    <table class="data">
        <thead>

        <tr>
            <th><?= $default_GeneralaccountId ?></th>
            <th><?= $default_GeneralaccountName ?></th>
            <th><?= $default_MainAccountId ?></th>
            <th><?= $default_AccountTypefinalId ?></th>
            <th><?= $default_AccountRegisterDate ?></th>
             <th><?= $default_Resed1ModaResed ?></th>
            <th><?= $default_ResedMonthResed ?></th>
            <th><?= $default_ResedYearResed ?></th>
            <th><?= $default_AccountStatus ?></th>
             <th><?= $default_AccountUpLim1Resed ?></th>
            <th><?= $default_AccountUpLim2Resed ?></th>
            <th><?= $default_AccountUpLim3Resed ?></th>

            <th><?= $default_text_table_control ?></th>
        </tr>
        </thead>
        <tbody>
        <?php if(false !== $accountgeneral): foreach ($accountgeneral as $Accountgeneral): ?>
            <tr>
                <td><?= $Accountgeneral->GeneralaccountId?></td>
                <td><?= $Accountgeneral->GeneralaccountName?></td>
                <td>
                    <select disabled name="MainaccountId"   id=" MainaccountId">
                        <option><?=  $default_MainAccountId ?></option>
                        <?php if (false !== $Accountmain): foreach ($Accountmain as $Accountmains): ?>
                            <option value="<?= $Accountmains->MainaccountId ?>" <?= $this->selectedIf('MainaccountId',$Accountmains->MainaccountId,$Accountgeneral) ?>><?= $Accountmains->MainaccountName ?></option>

                        <?php endforeach;endif; ?>
                    </select>
                </td>

                            <td>
                             <select  disabled  name="AccountTypefinalId"   id=" AccountTypefinalId">
                          <option><?=  $default_AccountTypefinalId ?></option>
                           <?php if (false !== $accounttype): foreach ($accounttype as $accounttypes): ?>
                               <option value="<?= $accounttypes->AccountTypefinalId ?>" <?= $this->selectedIf('AccountTypefinalId',$accounttypes->AccountTypefinalId,$Accountgeneral) ?>><?= $accounttypes->AccountTypefinalName ?></option>

                               <option value=<?= $accounttypes->AccountTypefinalId ?>><?=$accounttypes->AccountTypefinalName?></option>
                                               <?php endforeach;endif; ?>
                  </select>


                </td>

                <td><?= $Accountgeneral->AccountRegisterDate ?></td>
                <td><?= $Accountgeneral->Account1ModaResed?></td>
                <td><?= $Accountgeneral->AccountMonthResed?></td>
                <td><?= $Accountgeneral->AccountYearResed?></td>
                <td><?= $Accountgeneral->AccountStatus?></td>
                <td><?= $Accountgeneral->AccountUpLim1Resed?></td>
                <td><?= $Accountgeneral->AccountUpLim2Resed?></td>
                <td><?= $Accountgeneral->AccountUpLim3Resed?></td>

                <td>
                  <a href="/accountgeneral/edit/<?= $Accountgeneral->GeneralaccountId ?>"><i class="fa fa-edit"></i></a>
                  <a href="/accountgeneral/delete/<?= $Accountgeneral->GeneralaccountId ?>" onclick="if(!confirm('<?= $default_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                </td>

            </tr>

        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>