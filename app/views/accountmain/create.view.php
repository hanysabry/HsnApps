<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $title ?></legend>





        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('MainaccountName') ?>><?= $create_MainAccountName ?></label>
            <input required type="text" name="MainaccountName"  value="<?= $this->showValue('MainaccountName')?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('MainaccountName') ?>><?= $create_MainAccountName ?></label>
            <input required type="text" name="MainaccountName"  value="<?= $this->showValue('MainaccountName')?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('MainaccountNameEng') ?>><?= $create_MainAccountNameEng ?></label>
            <input required type="text" name="MainaccountNameEng"  value="<?= $this->showValue('MainaccountNameEng')?>">
        </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('AccountRegisterDate') ?>><?= $create_AccountRegisterDate ?></label>
                <input  type="date" name="AccountRegisterDate"  value="<?= $this->showValue('AccountRegisterDate')?>">
        </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('CreatedBy') ?>><?= $create_CreatedBy ?></label>
                <input   type="number" name="CreatedBy" value="<?= $this->showValue('CreatedBy') ?>">
        </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('CurrencyId') ?>><?= $create_CurrencyId ?></label>
            <input   type="text" name="CurrencyId"   value="<?= $this->showValue('CurrencyId') ?>">
        </div>




        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Nots') ?>><?= $create_Nots ?></label>
                <input   type="text" name="Nots" value="<?= $this->showValue('Nots') ?>">
        </div>




        <div class="input_wrapper_other n30 padding select">
        <select required name="AccountTypefinalId" id="AccountTypefinalId">
            <?php if (false !== $Accounttypefinal): foreach ($Accounttypefinal as $accounttypes): ?>
                <option value="<?= $accounttypes->AccountTypefinalId ?>"><?= $accounttypes->AccountTypefinalName ?> </option>
            <?php endforeach;endif; ?>
        </select>
        </div>


        <div class="input_wrapper_other n30 padding select">
            <select   name="AccountStatus" id="AccountStatus" >
                <option value="1" ><?= $create_AccountStatus ?></option>
                <option value="1" selected ><?= $create_AccountStatus_open ?></option>
                <option value="2"><?= $create_AccountStatus_dept ?></option>
                <option value="2"><?= $create_AccountStatus_credit ?></option>
                <option value="2"><?= $create_AccountStatus_close ?></option>
            </select>
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('Accountdept') ?>><?= $create_Accountdept ?></label>
            <input   type="text" name="Accountdept"   value="<?= $this->showValue('Accountdept') ?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountCredit') ?>><?= $create_AccountCredit ?></label>
                <input   type="text" name="AccountCredit"   value="<?= $this->showValue('AccountCredit') ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('Resed1ModaResed') ?>><?= $create_Resed1ModaResed ?></label>
                <input   type="number" name="Resed1ModaResed"  value="<?= $this->showValue('Resed1ModaResed') ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountMonthResed') ?>><?= $create_ResedMonthResed ?></label>
            <input   type="number" name="AccountMonthResed"   value="<?= $this->showValue('AccountMonthResed') ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountYearResed') ?>><?= $create_ResedYearResed ?></label>
            <input   type="number" name="AccountYearResed"  value="<?= $this->showValue('AccountYearResed')?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountUpLim1Resed') ?>><?= $create_AccountUpLim1Resed ?></label>
            <input   type="number" name="AccountUpLim1Resed"   value="<?= $this->showValue('AccountUpLim1Resed') ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountUpLim2Resed') ?>><?= $create_AccountUpLim2Resed ?></label>
            <input   type="number" name="AccountUpLim2Resed"   value="<?= $this->showValue('AccountUpLim2Resed') ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountUpLim3Resed') ?>><?= $create_AccountUpLim3Resed ?></label>
            <input   type="number" name="AccountUpLim3Resed"   value="<?= $this->showValue('AccountUpLim3Resed') ?>">
        </div>

        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>