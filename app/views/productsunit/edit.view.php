<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('UnitName', $productsunits) ?>><?= $edit_UnitName ?></label>
                <input required type="text" name="UnitName" maxlength="30" value="<?= $this->showValue('UnitName',$productsunits) ?>">
        </div>

        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('ProductId', $productsunits) ?>><?= $edit_ProductId ?></label>
            <input required type="text" name="ProductId" maxlength="30" value="<?= $this->showValue('ProductId',$productsunits) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('Quantity', $productsunits) ?>><?= $edit_Quantity ?></label>
            <input required type="text" name="Quantity" maxlength="30" value="<?= $this->showValue('Quantity',$productsunits) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('QuantityOfNo', $productsunits) ?>><?= $edit_QuantityOfNo ?></label>
            <input required type="text" name="QuantityOfNo" maxlength="30" value="<?= $this->showValue('QuantityOfNo',$productsunits) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('QuantityMin', $productsunits) ?>><?= $edit_QuantityOfNo ?></label>
            <input required type="text" name="QuantityMin" maxlength="30" value="<?= $this->showValue('QuantityMin',$productsunits) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('QuantityMax', $productsunits) ?>><?= $edit_QuantityMax ?></label>
            <input required type="text" name="QuantityMax" maxlength="30" value="<?= $this->showValue('QuantityMax',$productsunits) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('VatPercent', $productsunits) ?>><?= $edit_VatPercent ?></label>
            <input required type="text" name="VatPercent" maxlength="30" value="<?= $this->showValue('VatPercent',$productsunits) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('Nots', $productsunits) ?>><?= $edit_Nots ?></label>
            <input required type="text" name="Nots" maxlength="30" value="<?= $this->showValue('Nots',$productsunits) ?>">
        </div>



                  <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>