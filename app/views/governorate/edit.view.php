<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('GovernorateId', $governorate) ?>><?= $edit_GovernorateId ?></label>
                <input disabled  type="number" name="GovernorateId" maxlength="30" value="<?= $this->showValue('GovernorateId', $governorate) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('GovernorateName', $governorate) ?>><?= $edit_GovernorateName ?></label>
                <input required type="text" name="GovernorateName" maxlength="30" value="<?= $this->showValue('GovernorateName', $governorate) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('GovernorateNameEng', $governorate) ?>><?= $edit_GovernorateNameEng ?></label>
            <input required type="text" name="GovernorateNameEng"  value="<?= $this->showValue('GovernorateNameEng', $governorate) ?>">
        </div>

        <div class="input_wrapper_other padding n50 select">
            <select required name="CountryId" >
                <option><?=  $edit_CountryId ?></option>
                <?php if(false !== $country): foreach ($country as $countrys): ?>
                    <option value="<?= $countrys->CountryId ?>" <?= $this->selectedIf('CountryId',$countrys->CountryId,$governorate) ?>><?= $countrys->CountryName ?></option>
                <?php endforeach;endif; ?>
            </select>
        </div>

        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('Nots', $governorate) ?>><?= $edit_Nots ?></label>
            <input   type="text" name="Nots" maxlength="30" value="<?= $this->showValue('Nots', $governorate) ?>">
        </div>


                  <input class="no_float" type="submit" name="submit" value="<?= $edit_label_save ?>">
    </fieldset>
</form>