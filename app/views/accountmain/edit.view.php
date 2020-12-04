<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $title ?></legend>
        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('MainaccountName',$accountmain) ?>><?= $edit_MainAccountName ?></label>
                <input required type="text" name="MainaccountName"  value="<?= $this->showValue('MainaccountName', $accountmain) ?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('MainaccountNameEng',$accountmain) ?>><?= $edit_MainAccountNameEng ?></label>
            <input required type="text" name="MainaccountNameEng"  value="<?= $this->showValue('MainaccountNameEng', $accountmain) ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountRegisterDate',$accountmain) ?>><?= $edit_AccountRegisterDate ?></label>
            <input  type="date" name="AccountRegisterDate"   value="<?= $this->showValue('AccountRegisterDate', $accountmain) ?>">
        </div>
                <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('CreatedBy',$accountmain) ?>><?= $edit_CreatedBy ?></label>
            <input  type="number" name="CreatedBy"   value="<?= $this->showValue('CreatedBy', $accountmain) ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('CurrencyId',$accountmain) ?>><?= $edit_CurrencyId ?></label>
            <input  type="number" name="CurrencyId"   value="<?= $this->showValue('CurrencyId', $accountmain) ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('Nots',$accountmain) ?>><?= $edit_Nots ?></label>
            <input  type="text" name="Nots"   value="<?= $this->showValue('Nots', $accountmain) ?>">
        </div>


       <div class="input_wrapper_other padding n50 select">
            <select  name="AccountTypefinalId"   id=" AccountTypefinalId">
                <option><?=  $edit_AccountTypeName ?></option>
                <?php if (false !== $accounttype): foreach ($accounttype as $accounttypes): ?>
                    <option value="<?= $accounttypes->AccountTypefinalId ?>"<?= $this->selectedIf('AccountTypefinalId',$accounttypes->AccountTypefinalId,$accountmain) ?>><?=$accounttypes->AccountTypefinalName?></option>
                <?php endforeach;endif; ?>
            </select>
        </div>

        <div class="input_wrapper_other padding n50 select">
            <select required name="AccountStatus" >
                <option ><?= $edit_AccountStatus ?></option>
                <option value="1" <?=$accountmain->AccountStatus == 1 ? 'selected' : '' ?>><?= $edit_AccountStatus_open ?></option>
                <option value="2" <?=$accountmain->AccountStatus == 2  ? 'selected' : '' ?>><?= $edit_AccountStatus_dept ?></option>
                <option value="2" <?=$accountmain->AccountStatus == 3  ? 'selected' : '' ?>><?= $edit_AccountStatus_credit ?></option>
                <option value="2" <?=$accountmain->AccountStatus == 4  ? 'selected' : '' ?>><?= $edit_AccountStatus_close ?></option>
            </select>
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('Account1ModaResed',$accountmain) ?>><?= $edit_Resed1ModaResed ?></label>
            <input  type="number" name="Account1ModaResed"   value="<?= $this->showValue('Account1ModaResed', $accountmain) ?>">
        </div>




        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountMonthResed',$accountmain) ?>><?= $edit_ResedMonthResed ?></label>
            <input  type="number" name="AccountMonthResed"   value="<?= $this->showValue('AccountMonthResed', $accountmain) ?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountYearResed',$accountmain) ?>><?= $edit_ResedYearResed ?></label>
            <input  type="number"  name="AccountYearResed"   value="<?= $this->showValue('AccountMonthResed', $accountmain) ?>">
        </div>


            <div class="input_wrapper n50 border">
                <label<?= $this->labelFloat('AccountUpLim1Resed',$accountmain) ?>><?= $edit_AccountUpLim1Resed ?></label>
                <input   type="number" name="AccountUpLim1Resed"   value="<?= $this->showValue('AccountUpLim1Resed', $accountmain) ?>">
            </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountUpLim2Resed',$accountmain) ?>><?= $edit_AccountUpLim2Resed ?></label>
            <input   type="number" name="AccountUpLim2Resed"   value="<?= $this->showValue('AccountUpLim2Resed', $accountmain) ?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountUpLim3Resed',$accountmain) ?>><?= $edit_AccountUpLim3Resed ?></label>
            <input   type="number" name="AccountUpLim3Resed"   value="<?= $this->showValue('AccountUpLim3Resed', $accountmain) ?>">
        </div>
        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>