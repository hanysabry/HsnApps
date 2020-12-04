<div class="container">

    <a href="/sla/print" style="margin-right:5px " class="button" name="Pdf"  ><i class="fa fa-file-pdf-o"></i></i> <?= $text_Pdf ?></a>

    <a href="/salesinvoicesdetails/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>

    <table class="data">
        <thead>
        <tr>
            <th><?= $default_InvoiceId ?></th>

            <th><?= $default_ProductId ?></th>
            <th><?= $default_ProductName ?></th>
            <th><?= $default_ProductNameEng ?></th>
            <th><?= $default_Quantity ?></th>
            <th><?= $default_CreatedAt ?></th>
            <th><?= $default_UnitName ?></th>
            <th><?= $default_Discount?></th>
            <th><?= $default_PercentDiscount ?></th>
            <th><?= $default_AmountDiscount ?></th>
            <th><?= $default_NetPriceUnit ?></th>
            <th><?= $default_NetPriceTotal ?></th>
            <th><?= $default_AssistantaccountId ?></th>
            <th><?= $default_CompanyId ?></th>
            <th><?= $default_BranchesId ?></th>
            <th><?= $default_CountryId ?></th>
            <th><?= $default_StoreIdSub ?></th>
            <th><?= $default_Nots ?></th>
            <th><?= $default_text_table_control ?></th>
        </tr>
        </thead>
        <tbody>
        <?php if(false !== $salesinvoicesdetails): foreach ($salesinvoicesdetails as $salesinvoicesdetail): ?>
            <tr>
                <td><?= $salesinvoicesdetail->InvoiceId?></td>
                <td><?= $salesinvoicesdetail->ProductId?></td>
                <td><?= $salesinvoicesdetail->ProductName?></td>
                <td><?= $salesinvoicesdetail->ProductNameEng?></td>
                <td><?= $salesinvoicesdetail->Quantity?></td>
                <td><?= $salesinvoicesdetail->CreatedAt?></td>
                <td><?= $salesinvoicesdetail->UnitName?></td>
                <td><?= $salesinvoicesdetail->Discount?></td>
                <td><?= $salesinvoicesdetail->PercentDiscount?></td>
                <td><?= $salesinvoicesdetail->AmountDiscount?></td>
                <td><?= $salesinvoicesdetail->NetPriceUnit?></td>
                <td><?= $salesinvoicesdetail->NetPriceTotal?></td>
                <td><?= $salesinvoicesdetail->AssistantaccountId?></td>
                <td><?= $salesinvoicesdetail->CompanyId?></td>
                <td><?= $salesinvoicesdetail->StoreIdSub?></td>
                <td><?= $salesinvoicesdetail->Nots?></td>

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
                  <a href="/salesinvoicesdetails/edit/<?= $accountassistant->AssistantaccountId ?>"><i class="fa fa-edit"></i></a>
                  <a href="/salesinvoicesdetails/delete/<?= $accountassistant->AssistantaccountId ?>" onclick="if(!confirm('<?= $default_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                </td>

            </tr>

        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>