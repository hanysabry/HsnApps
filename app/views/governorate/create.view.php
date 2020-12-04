<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>
        <div class="input_wrapper n20 border">
            <label<?= $this->labelFloat('GovernorateName') ?>><?= $create_GovernorateName ?></label>
                <input  type="text" name="GovernorateName"  value="<?= $this->showValue('GovernorateName') ?>">
        </div>
        <div class="input_wrapper n20 border padding">
            <label<?= $this->labelFloat('GovernorateNameEng') ?>><?= $create_GovernorateNameEng ?></label>
                <input required type="text" name="GovernorateNameEng" maxlength="10" value="<?= $this->showValue('GovernorateNameEng') ?>">
        </div>

  <div class="input_wrapper_other padding n20 select">
            <select required name="CountryId">
                <?php if (false !== $country): foreach ($country as $countrys): ?>
                 <option value="<?= $countrys->CountryId ?>"><?= $countrys->CountryName ?> </option>
                <?php endforeach;endif; ?>
            </select>
        </div>
        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Nots') ?>><?= $create_Nots?></label>
                <input   type="text" name="Nots" value="<?= $this->showValue('Nots') ?>">

        </div>
        <input class="no_float" type="submit" name="submit" value="<?= $create_save ?>">
    </fieldset>
</form>