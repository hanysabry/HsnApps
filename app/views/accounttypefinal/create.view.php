<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>
        <div class="input_wrapper n20 border">
            <label<?= $this->labelFloat('AccountTypefinalName') ?>><?= $create_accountTypeName ?></label>
                <input d  type="text" name="AccountTypefinalName"   value="<?= $this->showValue('AccountTypefinalName') ?>">

        </div>
        <div class="input_wrapper n20 border">
            <label<?= $this->labelFloat('AccountTypefinalNameEng') ?>><?= $create_accountTypeNameEng ?></label>
                <input required type="text" name="AccountTypefinalNameEng"   value="<?= $this->showValue('AccountTypefinalNameEng') ?>">
        </div>


        <div class="input_wrapper n20 border padding">
            <label<?= $this->labelFloat('Nots') ?>><?= $create_Nots ?></label>
                <input   type="text" name="Nots"   value="<?= $this->showValue('Nots') ?>">
        </div>
        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>
