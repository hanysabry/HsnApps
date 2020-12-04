<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('CountryId', $country) ?>><?= $CountryId ?></label>
                <input required type="text" name="CountryId" maxlength="40" value="<?= $this->showValue('CountryId', $country) ?>">
        </div>
        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('CountryName', $country) ?>><?= $CountryName ?></label>
            <input required type="text" name="CountryName" maxlength="40" value="<?= $this->showValue('CountryName', $country) ?>">
        </div>
        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Nots', $country) ?>><?= $Nots ?></label>
            <input required type="text" name="Nots" maxlength="40" value="<?= $this->showValue('Nots', $country) ?>">
        </div>

        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>

