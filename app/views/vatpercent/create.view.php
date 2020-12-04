<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>

        <div class="input_wrapper n20 border padding">
            <label<?= $this->labelFloat('VatPercent') ?>><?= $create_VatPercent ?></label>
                <input required type="number" name="VatPercent"  value="<?= $this->showValue('VatPercent') ?>">
        </div>

        <div class="input_wrapper n20 border padding">
            <label<?= $this->labelFloat('Nots') ?>><?= $create_Nots ?></label>
            <input  type="text" name="Nots"  value="<?= $this->showValue('Nots') ?>">
        </div>


        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>

