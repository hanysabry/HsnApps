<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>

        <div class="input_wrapper n20 border padding">
            <label<?= $this->labelFloat('CityName') ?>><?= $text_CityName ?></label>
                <input required type="text" name="CityName" maxlength="10" value="<?= $this->showValue('CityName') ?>">
        </div>


        <div class="input_wrapper n20 border padding">
            <label<?= $this->labelFloat('CityNameEng') ?>><?= $text_CityNameEng ?></label>
            <input required type="text" name="CityNameEng" maxlength="10" value="<?= $this->showValue('CityNameEng') ?>">
        </div>




  <div class="input_wrapper_other padding n20 select">
            <select required name="CountryId">
                <option><?=  $text_CountryName ?></option>
                <?php if (false !== $country): foreach ($country as $countrys): ?>
                 <option value=<?= $countrys->CountryId ?>><?= $countrys->CountryName ?> </option>
                <?php endforeach;endif; ?>
            </select>
        </div>

        <div class="input_wrapper_other padding n20 select">
        <select    name="GovernorateId"   id="GovernorateId">
            <option><?=  $text_table_GovernorateName ?></option>
                     <?php if (false !== $governorate ): foreach ($governorate as $governorates) : ?>
                <option value="<?= $governorates->GovernorateId ?>"><?= $governorates->GovernorateName ?></option>
            <?php endforeach;endif; ?>
        </select>
        </div>

        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Nots') ?>><?= $text_Nots?></label>
                <input   type="text" name="Nots" value="<?= $this->showValue('Nots') ?>">


        </div>
        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>