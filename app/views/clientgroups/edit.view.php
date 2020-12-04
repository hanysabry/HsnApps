<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>
        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('GroupName', $clientgroups) ?>><?= $edit_GroupName ?></label>
            <input required type="text" name="GroupName"  value="<?= $this->showValue('GroupName', $clientgroups) ?>">
        </div>
        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('GroupIdaccount', $clientgroups) ?>><?= $edit_GroupIdaccount ?></label>
            <input required type="number" name="GroupIdaccount"   value="<?= $this->showValue('GroupIdaccount', $clientgroups) ?>">
        </div>

        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('GroupNameaccount', $clientgroups) ?>><?= $edit_GroupNameaccount ?></label>
            <input required type="text" name="GroupNameaccount"   value="<?= $this->showValue('GroupNameaccount', $clientgroups) ?>">
        </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Nots', $clientgroups) ?>><?= $edit_Nots ?></label>
            <input required type="text" name="Nots" value="<?= $this->showValue('Nots', $clientgroups) ?>">
        </div>
        <input class="no_float" type="submit" name="submit" value="<?= $edit_label_save ?>">
    </fieldset>
</form>