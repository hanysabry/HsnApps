<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountTypefinalName', $accounttype) ?>><?= $edit_accountTypeName ?></label>
                <input required type="text" name="AccountTypefinalName" maxlength="40" value="<?= $this->showValue('AccountTypefinalName', $accounttype) ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('AccountTypefinalNameEng', $accounttype) ?>><?= $edit_accountTypeNameEng ?></label>
            <input required type="text" name="AccountTypefinalNameEng" maxlength="40" value="<?= $this->showValue('AccountTypefinalNameEng', $accounttype) ?>">
        </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Nots',$accounttype) ?>><?= $edit_Nots ?></label>
            <input  type="text" name="Nots" maxlength="40" value="<?= $this->showValue('Nots', $accounttype) ?>">
        </div>

        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>

