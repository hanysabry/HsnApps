<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>


  <div class="input_wrapper n50 padding border">
  <label<?= $this->labelFloat('VatPercent', $vatpercent) ?>><?= $edit_VatPercent ?></label>
   <input required type="number" name="VatPercent" maxlength="30" value="<?= $this->showValue('VatPercent', $vatpercent) ?>">
   </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('Nots', $vatpercent) ?>><?= $edit_Nots ?></label>
            <input required type="text" name="Nots" m  value="<?= $this->showValue('Nots', $vatpercent) ?>">
        </div>


                  <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>