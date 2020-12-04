<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>
        <div class="input_wrapper n20 border">
             <label<?= $this->labelFloat('UnitId') ?>><?= $create_UnitId ?></label>
            <input required type="text" name="UnitId"   value="<?= $this->showValue('UnitId') ?>">
        </div>

        <div class="input_wrapper n20 border">
            <label<?= $this->labelFloat('UnitName') ?>><?= $create_UnitName ?></label>
                <input required type="text" name="UnitName" maxlength="10" value="<?= $this->showValue('UnitName') ?>">
        </div>

        <div class="input_wrapper_other padding n20 select">
            <select required name="ProductId">
                <option value=""><?= $create_ProductId ?></option>
                <?php if (false !== $product): foreach ($product as $products): ?>
                    <option value="<?= $products->ProductId ?>"><?=  $products->Name ?> <?=  $products->Name ?></option>
                <?php endforeach;endif; ?>
            </select>
        </div>



        <div class="input_wrapper n20 padding border">
            <label<?= $this->labelFloat('Quantity') ?>><?= $create_Quantity ?></label>
                <input required type="number" name="Quantity" maxlength="30" value="<?= $this->showValue('Quantity') ?>">
        </div>
        <div class="input_wrapper n20 border padding">
            <label<?= $this->labelFloat('QuantityOfNo') ?>><?= $create_QuantityOfNo ?></label>
                <input required type="number" name="QuantityOfNo" value="<?= $this->showValue('QuantityOfNo') ?>">
        </div>
        <div class="input_wrapper n20 padding">
            <label<?= $this->labelFloat('QuantityMin') ?>><?= $create_QuantityMin ?></label>
                <input required type="number" name="QuantityMin" value="<?= $this->showValue('QuantityMin') ?>">
        </div>
        <div class="input_wrapper n30 border">
            <label<?= $this->labelFloat('QuantityMax') ?>><?= $create_QuantityMax ?></label>
                <input required type="number" name="QuantityMax" maxlength="40" value="<?= $this->showValue('QuantityMax') ?>">
        </div>

        <div class="input_wrapper_other padding n20 select">
            <select required name="VatPercent">
                <option value=""><?= $create_VatPercent ?></option>
                <?php if (false !== $product): foreach ($product as $products): ?>
                    <option value="<?= $products->ProductId ?>"><?=  $products->Name ?> <?=  $products->Name ?></option>
                <?php endforeach;endif; ?>
            </select>
        </div>



        <div class="input_wrapper n30 border padding">
            <label<?= $this->labelFloat('VatPercent') ?>><?= $create_VatPercent ?></label>
                <input required type="number" name="VatPercent" maxlength="40" value="<?= $this->showValue('VatPercent') ?>">
        </div>
        <div class="input_wrapper n20 padding border">
            <label<?= $this->labelFloat('Nots') ?>><?= $create_Nots ?></label>
            <input required type="text" name="Nots" value="<?= $this->showValue('Nots') ?>">
        </div>
        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>