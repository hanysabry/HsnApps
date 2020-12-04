<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>

        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('GeneralaccountName', $accountgeneral) ?>><?= $edit_GeneralaccountName ?></label>
                <input required type="text" name="GeneralaccountName" maxlength="45" value="<?= $this->showValue('GeneralaccountName', $accountgeneral) ?>">
        </div>
        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('GeneralaccountNameEng', $accountgeneral) ?>><?= $edit_GeneralaccountNameEng ?></label>
            <input required type="text" name="GeneralaccountNameEng" maxlength="45" value="<?= $this->showValue('GeneralaccountNameEng', $accountgeneral) ?>">
        </div>


        <div class="input_wrapper no-footer padding border">
        <select  name="MainaccountId"   id=" MainaccountId">
            <option><?=  $edit_MainAccountId ?></option>
            <?php if (false !== $Accountmain): foreach ($Accountmain as $Accountmains): ?>
                <option value="<?= $Accountmains->MainaccountId ?>" <?= $this->selectedIf('MainaccountId',$Accountmains->MainaccountId,$accountgeneral) ?>><?= $Accountmains->MainaccountName ?></option>
            <?php endforeach;endif; ?>
        </select>
        </div>

        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('AccountRegisterDate', $accountgeneral) ?>><?= $edit_AccountRegisterDate ?></label>
            <input  type="date" name="AccountRegisterDate" maxlength="30" value="<?= $this->showValue('AccountRegisterDate', $accountgeneral) ?>">
        </div>
        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('Nots', $accountgeneral) ?>><?= $edit_Nots ?></label>
            <input  type="text"  name="Nots" maxlength="30" value="<?= $this->showValue('Nots', $accountgeneral) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('CreatedBy', $accountgeneral) ?>><?= $edit_CreatedBy ?></label>
            <input  type="number" name="CreatedBy" maxlength="30" value="<?= $this->showValue('CreatedBy', $accountgeneral) ?>">
        </div>

        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('CurrencyId', $accountgeneral) ?>><?= $edit_CurrencyId ?></label>
            <input  type="number" name="CurrencyId" maxlength="30" value="<?= $this->showValue('CurrencyId', $accountgeneral) ?>">
        </div>


        <div class="input_wrapper_other padding n50 select">
            <select  name="AccountTypefinalId"   id=" AccountTypefinalId">
                <option><?=  $edit_AccountTypefinalName ?></option>
                <?php if (false !== $Accounttype): foreach ($Accounttype as $accounttypes): ?>
                    <option value="<?= $accounttypes->AccountTypefinalId ?>"<?= $this->selectedIf('AccountTypefinalId',$accounttypes->AccountTypefinalId,$accountgeneral) ?>><?=$accounttypes->AccountTypefinalName?></option>
                <?php endforeach;endif; ?>
            </select>
        </div>


        <div class="input_wrapper_other padding n50 select">
            <select  name="AccountStatus" id="AccountStatus">
                <option ><?= $edit_AccountStatus ?></option>
                <option value="1" <?=$accountgeneral->AccountStatus == 1 ? 'selected' : '' ?>><?= $edit_AccountStatus_open ?></option>
                <option value="2" <?=$accountgeneral->AccountStatus == 2  ? 'selected' : '' ?>><?= $edit_AccountStatus_dept ?></option>
                <option value="2" <?=$accountgeneral->AccountStatus == 3  ? 'selected' : '' ?>><?= $edit_AccountStatus_credit ?></option>
                <option value="2" <?=$accountgeneral->AccountStatus == 4  ? 'selected' : '' ?>><?= $edit_AccountStatus_close ?></option>
            </select>
        </div>



        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('Accountdept', $accountgeneral) ?>><?= $edit_Accountdept ?></label>
            <input  type="number" name="Accountdept" maxlength="30" value="<?= $this->showValue('Accountdept', $accountgeneral) ?>">
        </div>



        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('AccountCredit', $accountgeneral) ?>><?= $edit_AccountCredit ?></label>
            <input  type="number" name="AccountCredit" maxlength="30" value="<?= $this->showValue('AccountCredit', $accountgeneral) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('Account1ModaResed', $accountgeneral) ?>><?= $edit_Resed1ModaResed ?></label>
            <input  type="number" name="Account1ModaResed" maxlength="30" value="<?= $this->showValue('Account1ModaResed', $accountgeneral) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('AccountMonthResed', $accountgeneral) ?>><?= $edit_AccountMonthResed ?></label>
            <input  type="number" name="AccountMonthResed" maxlength="30" value="<?= $this->showValue('AccountMonthResed', $accountgeneral) ?>">
        </div>



        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('AccountYearResed', $accountgeneral) ?>><?= $edit_AccountYearResed ?></label>
            <input  type="number" name="AccountYearResed" maxlength="30" value="<?= $this->showValue('AccountYearResed', $accountgeneral) ?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountUpLim1Resed',$accountgeneral) ?>><?= $edit_AccountUpLim1Resed ?></label>
            <input   type="number" name="AccountUpLim1Resed"   value="<?= $this->showValue('AccountUpLim1Resed', $accountgeneral) ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountUpLim2Resed',$accountgeneral) ?>><?= $edit_AccountUpLim2Resed ?></label>
            <input   type="number" name="AccountUpLim2Resed"   value="<?= $this->showValue('AccountUpLim2Resed', $accountgeneral) ?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountUpLim3Resed',$accountgeneral) ?>><?= $edit_AccountUpLim1Resed ?></label>
            <input   type="number" name="AccountUpLim3Resed"   value="<?= $this->showValue('AccountUpLim3Resed', $accountgeneral) ?>">
        </div>




        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>