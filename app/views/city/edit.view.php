<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('CityId', $city) ?>><?= $text_CityId ?></label>
                <input disabled  type="number" name="CityId" maxlength="30" value="<?= $this->showValue('CityId', $city) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('CityName', $city) ?>><?= $text_CityName ?></label>
                <input required type="text" name="CityName" maxlength="30" value="<?= $this->showValue('CityName', $city) ?>">
        </div>

        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('CityNameEng', $city) ?>><?= $text_CityNameEng ?></label>
            <input required type="text" name="CityNameEng"  value="<?= $this->showValue('CityNameEng', $city) ?>">
        </div>

        <div class="input_wrapper_other padding n50 select">
            <select required name="CountryId" >
                <option><?=  $text_CountryId ?></option>
                <?php if(false !== $country): foreach ($country as $countrys): ?>
                    <option value="<?= $countrys->CountryId ?>" <?= $this->selectedIf('CountryId',$countrys->CountryId,$city) ?>><?= $countrys->CountryName ?></option>
                <?php endforeach;endif; ?>
            </select>
        </div>


        <div class="input_wrapper_other padding n50 select">
            <select    name="GovernorateId"   id="GovernorateId">
                <option><?=  $text_GovernorateName ?></option>
                <?php if (false !== $governorate): foreach ($governorate as $governorates): ?>
                    <option value="<?= $governorates->GovernorateId ?>"<?= $this->selectedIf('GovernorateId',$governorates->GovernorateId,$city) ?>><?= $governorates->GovernorateName ?></option>
                <?php endforeach;endif; ?>
            </select>
        </</div>>




        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('Nots', $city) ?>><?= $text_Nots ?></label>
            <input   type="text" name="Nots" maxlength="30" value="<?= $this->showValue('Nots', $city) ?>">
        </div>


                  <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>