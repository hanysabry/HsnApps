<div class="container">
    <a href="/accountmain/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>
    <table class="data" style="display: block"  >
        <thead>
            <tr>
                <th><?= $default_MainAccountId ?></th>
                <th><?= $default_MainAccountName ?></th>
                <th><?= $default_MainAccountNameEng ?></th>
                <th><?= $default_AccountRegisterDate ?></th>
                <th><?= $default_AccountTypefinalId ?></th>

                 <th><?= $default_Resed1ModaResed ?></th>
                 <th><?= $default_ResedMonthResed ?></th>
                 <th><?= $default_ResedYearResed ?></th>
                 <th><?= $default_AccountStatus ?></th>
                <th><?= $default_AccountUpLim1Resed ?></th>
              </tr>
        </thead>
        <tbody>
        <?php if(false !== $accountmain): foreach ($accountmain as $accountcategory): ?>
            <tr>
                <td><?= $accountcategory->MainaccountId ?></td>
                <td><?= $accountcategory->MainaccountName ?></td>
                <td><?= $accountcategory->MainaccountNameEng ?></td>
                <td><?= $accountcategory->AccountRegisterDate ?></td>


                <td>
                    <select  disabled  name="AccountTypefinalId"   id=" AccountTypefinalId">
                        <option><?=  $default_AccountTypefinalId ?></option>
                        <?php if (false !== $accounttype): foreach ($accounttype as $accounttypes): ?>
                            <option value="<?= $accounttypes->AccountTypefinalId ?>" <?= $this->selectedIf('AccountTypefinalId',$accounttypes->AccountTypefinalId,$accountcategory) ?>><?= $accounttypes->AccountTypefinalName ?></option>

                            <option value=<?= $accounttypes->AccountTypefinalId ?>><?=$accounttypes->AccountTypefinalName?></option>
                        <?php endforeach;endif; ?>
                    </select>


                </td>

                 <td><?= $accountcategory->Account1ModaResed?></td>
                 <td><?= $accountcategory->AccountMonthResed?></td>
                 <td><?= $accountcategory->AccountYearResed?></td>
                           <td>
                    <select disabled name="AccountStatus" id="AccountStatus">
                        <option  value="1" <?=$accountcategory->AccountStatus == 1 ? 'selected' : '' ?>><?= $default_AccountStatus_open ?></option>
                        <option value="2" <?=$accountcategory->AccountStatus == 2  ? 'selected' : '' ?>><?= $default_AccountStatus_dept ?></option>
                        <option value="2" <?=$accountcategory->AccountStatus == 3  ? 'selected' : '' ?>><?= $default_AccountStatus_credit ?></option>
                        <option  value="1" <?=$accountcategory->AccountStatus == 4 ? 'selected' : '' ?>><?= $default_AccountStatus_close ?></option>

                    </select>
                </td>


                <td><?= $accountcategory->AccountUpLim1Resed?></td>
                <td>
   <a href="/accountmain/edit/<?=$accountcategory->MainaccountId ?>"><i class="fa fa-edit"></i></a>
   <a href="/accountmain/delete/<?= $accountcategory->MainaccountId ?>" onclick="if(!confirm('<?= $default_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
      </td>
            </tr>

        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>