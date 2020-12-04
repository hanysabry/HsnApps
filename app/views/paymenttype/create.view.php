<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>

        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Name') ?>><?= $create_PaymentName ?></label>
            <input required type="text" name="Name" maxlength="40" value="<?= $this->showValue('Name') ?>">
        </div>
        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('Nots') ?>><?= $create_Nots?></label>
            <input required type="text" name="Nots" maxlength="45" value="<?= $this->showValue('Nots') ?>">
        </div>

        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>