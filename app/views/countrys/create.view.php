<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>

        <div class="input_wrapper n20 border">
            <label<?= $this->labelFloat('CountryId') ?>><?= $CountryId ?></label>
                <input disabled  readonly type="number" name="CountryId" maxlength="10" value="<?= $this->showValue('CountryId') ?>">
        </div>


        <div class="input_wrapper n20 border">
            <label<?= $this->labelFloat('CountryName') ?>><?= $CountryName ?></label>
                <input required type="text" name="CountryName" maxlength="10" value="<?= $this->showValue('CountryName') ?>">
        </div>
        <div class="input_wrapper n20 border padding">
            <label<?= $this->labelFloat('Nots') ?>><?= $Nots ?></label>
                <input   type="text" name="Nots" maxlength="10" value="<?= $this->showValue('Nots') ?>">

        </div>
        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>