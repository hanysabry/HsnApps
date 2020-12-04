<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('AssistantaccountName', $accountassistant) ?>><?= $edit_AccountassistantName ?></label>
            <input required type="text" name="AssistantaccountName" maxlength="45" value="<?= $this->showValue('AssistantaccountName', $accountassistant) ?>">
        </div>



        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('AssistantaccountNameEng', $accountassistant) ?>><?= $edit_AccountassistantNameEng ?></label>
            <input required type="text" name="AssistantaccountNameEng" maxlength="45" value="<?= $this->showValue('AssistantaccountNameEng', $accountassistant) ?>">
        </div>

        <div  class="input_wrapper n50 padding border" <label><?= $edit_MainAccountId ?> </label>
            <select  name="MainaccountId"  id=" MainaccountId">
                          <?php if (false !== $Accountmain): foreach ($Accountmain as $Accountmains): ?>
                    <option value="<?= $Accountmains->MainaccountId ?>" <?= $this->selectedIf('MainaccountId',$Accountmains->MainaccountId,$accountassistant) ?>><?= $Accountmains->MainaccountName ?></option>
                <?php endforeach;endif; ?>
            </select>
        </div>



        <div class="input_wrapper n50 padding border " <label><?= $edit_GeneralaccountId ?> </label>
                     <select  name="GeneralaccountId"  id=" GeneralaccountId">
                <?php if (false !== $Accountgeneral): foreach ($Accountgeneral as $accountgeneral): ?>
                    <option value="<?= $accountgeneral->GeneralaccountId ?>" <?= $this->selectedIf('GeneralaccountId',$accountgeneral->GeneralaccountId,$accountassistant) ?>><?= $accountgeneral->GeneralaccountName ?></option>
                <?php endforeach;endif; ?>
            </select>
        </div>



        <div class="input_wrapper_other padding n50 select">
            <select  name="AccountTypefinalId"  id=" AccountTypefinalId" >
            <label><?= $edit_AccountTypefinalId ?> </label>
                <?php if (false !== $Accounttype): foreach ($Accounttype as $accounttypes): ?>
                    <option value="<?= $accounttypes->AccountTypefinalId ?>"<?= $this->selectedIf('AccountTypefinalId',$accounttypes->AccountTypefinalId,$accountassistant) ?>><?=$accounttypes->AccountTypefinalName?></option>
                <?php endforeach;endif; ?>
            </select>
        </div>

        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('AccountRegisterDate', $accountassistant) ?>><?= $edit_AccountRegisterDate ?></label>
            <input  type="datetime-local" name="AccountRegisterDate"  value="<?= $this->showValue('AccountRegisterDate', $accountassistant) ?>">
        </div>
d
        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('Nots', $accountassistant) ?>><?= $edit_Nots ?></label>
            <input  type="text"  name="Nots" maxlength="30" value="<?= $this->showValue('Nots', $accountassistant) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('CreatedBy', $accountassistant) ?>><?= $edit_CreatedBy ?></label>
            <input  type="number" name="CreatedBy" maxlength="30" value="<?= $this->showValue('CreatedBy', $accountassistant) ?>">
        </div>

        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('CurrencyId', $accountassistant) ?>><?= $edit_CurrencyId ?></label>
            <input  type="number" name="CurrencyId" maxlength="30" value="<?= $this->showValue('CurrencyId', $accountassistant) ?>">
        </div>


        <div class="input_wrapper_other padding n50 select">
            <select  name="AccountStatus" id="AccountStatus">
                <option ><?= $edit_AccountStatus ?></option>
                <option value="1" <?=$accountassistant->AccountStatus == 1 ? 'selected' : '' ?>><?= $edit_AccountStatus_open ?></option>
                <option value="2" <?=$accountassistant->AccountStatus == 2  ? 'selected' : '' ?>><?= $edit_AccountStatus_dept ?></option>
                <option value="2" <?=$accountassistant->AccountStatus == 3  ? 'selected' : '' ?>><?= $edit_AccountStatus_credit ?></option>
                <option value="2" <?=$accountassistant->AccountStatus == 4  ? 'selected' : '' ?>><?= $edit_AccountStatus_close ?></option>
            </select>
        </div>



        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('Accountdept', $accountassistant) ?>><?= $edit_Accountdept ?></label>
            <input  type="number" name="Accountdept" maxlength="30" value="<?= $this->showValue('Accountdept', $accountassistant) ?>">
        </div>



        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('AccountCredit', $accountassistant) ?>><?= $edit_AccountCredit ?></label>
            <input  type="number" name="AccountCredit" maxlength="30" value="<?= $this->showValue('AccountCredit', $accountassistant) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('Account1ModaResed', $accountassistant) ?>><?= $edit_Resed1ModaResed ?></label>
            <input  type="number" name="Account1ModaResed" maxlength="30" value="<?= $this->showValue('Account1ModaResed', $accountassistant) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('AccountMonthResed', $accountassistant) ?>><?= $edit_AccountMonthResed ?></label>
            <input  type="number" name="AccountMonthResed" maxlength="30" value="<?= $this->showValue('AccountMonthResed', $accountassistant) ?>">
        </div>



        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('AccountYearResed', $accountassistant) ?>><?= $edit_AccountYearResed ?></label>
            <input  type="number" name="AccountYearResed" maxlength="30" value="<?= $this->showValue('AccountYearResed', $accountassistant) ?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountUpLim1Resed',$accountassistant) ?>><?= $edit_AccountUpLim1Resed ?></label>
            <input   type="number" name="AccountUpLim1Resed"   value="<?= $this->showValue('AccountUpLim1Resed', $accountassistant) ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountUpLim2Resed',$accountassistant) ?>><?= $edit_AccountUpLim2Resed ?></label>
            <input   type="number" name="AccountUpLim2Resed"   value="<?= $this->showValue('AccountUpLim2Resed', $accountassistant) ?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountUpLim3Resed',$accountassistant) ?>><?= $edit_AccountUpLim1Resed ?></label>
            <input   type="number" name="AccountUpLim3Resed"   value="<?= $this->showValue('AccountUpLim3Resed', $accountassistant) ?>">
        </div>

        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>