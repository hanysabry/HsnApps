<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('GroupName') ?>><?= $create_GroupName ?></label>
            <input required type="text" name="GroupName" value="<?= $this->showValue('GroupName') ?>">
        </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('GroupIdaccount') ?>><?= $create_GroupIdaccount ?></label>
            <input required type="text" name="GroupIdaccount" maxlength="40" value="<?= $this->showValue('GroupIdaccount') ?>">
        </div>

        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('GroupNameaccount') ?>><?= $create_GroupNameaccount ?></label>
            <input required type="text" name="GroupNameaccount" value="<?= $this->showValue('GroupNameaccount') ?>">
        </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Nots') ?>><?= $create_Nots ?></label>
            <input required type="text" name="Nots" value="<?= $this->showValue('Nots') ?>">
        </div>
        <input class="no_float" type="submit" name="submit" value="<?= $create_label_save ?>">
    </fieldset>
</form>