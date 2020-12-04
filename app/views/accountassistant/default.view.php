<div class="container">

    <a href="/Accountassistant/print" style="margin-right:5px " class="button" name="Pdf"  ><i class="fa fa-file-pdf-o"></i></i> <?= $text_Pdf ?></a>

    <a href="/Accountassistant/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>

    <table class="data">
        <thead>
        <tr>
            <th><?= $default_AssistantaccountId ?></th>
            <th><?= $default_AccountassistantName ?></th>
            <th><?= $default_AccountassistantNameEng ?></th>
            <th><?= $default_GeneralaccountName ?></th>
            <th><?= $default_MainAccountName ?></th>

            <th><?= $default_AccountTypefinalId?></th>


            <th><?= $default_AccountRegisterDate ?></th>
            <th><?= $default_Nots ?></th>
            <th><?= $default_Resed1ModaResed ?></th>
            <th><?= $default_ResedMonthResed ?></th>
            <th><?= $default_ResedYearResed ?></th>
            <th><?= $default_AccountStatus ?></th>
            <th><?= $default_AccountUpLim1Resed ?></th>
            <th><?= $default_text_table_control ?></th>
        </tr>
        </thead>
        <tbody>
        <?php if(false !== $Accountassistant): foreach ($Accountassistant as $accountassistant): ?>
            <tr>
                <td><?= $accountassistant->AssistantaccountId?></td>
                <td><?= $accountassistant->AssistantaccountName?></td>
                <td><?= $accountassistant->AssistantaccountNameEng?></td>
                <td>
                    <select disabled name="MainAccountId"   id="MainAccountId">
                        <option><?=  $default_MainAccountName ?></option>
                        <?php if (false !== $Accountmain): foreach ($Accountmain as $Accountmains): ?>
                            <option value="<?= $Accountmains->MainaccountId ?>" <?= $this->selectedIf('MainaccountId',$Accountmains->MainaccountId,$accountassistant) ?>><?= $Accountmains->MainaccountName ?></option>

                        <?php endforeach;endif; ?>
                    </select>
                </td>

                <td>
                    <select disabled name="GeneralaccountId"   id=" GeneralaccountId">
                        <option><?=  $default_GeneralaccountName ?></option>
                        <?php if (false !== $accountgeneral): foreach ($accountgeneral as $Accountgeneral): ?>
                            <option value="<?= $Accountgeneral->GeneralaccountId ?>" <?= $this->selectedIf('GeneralaccountId' ,$Accountgeneral->GeneralaccountId,$accountassistant) ?>><?=  $Accountgeneral->GeneralaccountName ?></option>

                        <?php endforeach;endif; ?>
                    </select>
                </td>

                <td>
                    <select  disabled  name="AccountTypefinalId"   id=" AccountTypefinalId">
                        <option><?=  $default_AccountTypefinalId ?></option>
                        <?php if (false !== $accounttype): foreach ($accounttype as $accounttypes): ?>
                            <option value="<?= $accounttypes->AccountTypefinalId ?>" <?= $this->selectedIf('AccountTypefinalId',$accounttypes->AccountTypefinalId,$accountassistant) ?>><?= $accounttypes->AccountTypefinalName ?></option>
                        <?php endforeach;endif; ?>
                    </select>
                </td>

                <td><?= $accountassistant->AccountRegisterDate ?></td>
                <td><?= $accountassistant->Account1ModaResed?></td>
                <td><?= $accountassistant->AccountMonthResed?></td>
                <td><?= $accountassistant->AccountYearResed?></td>
                <td><?= $accountassistant->AccountStatus?></td>
                <td><?= $accountassistant->AccountUpLim1Resed?></td>
                <td><?= $accountassistant->AccountUpLim2Resed?></td>
                <td><?= $accountassistant->AccountUpLim3Resed?></td>
                <td>
                  <a href="/accountassistant/edit/<?= $accountassistant->AssistantaccountId ?>"><i class="fa fa-edit"></i></a>
                  <a href="/accountassistant/delete/<?= $accountassistant->AssistantaccountId ?>" onclick="if(!confirm('<?= $default_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                </td>

            </tr>

        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>