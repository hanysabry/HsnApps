<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>
        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('Name') ?>><?= $create_Name ?></label>
            <input required type="text" name="Name" maxlength="40" value="<?= $this->showValue('Name') ?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('PhoneNumber') ?>><?= $create_phone_number ?></label>
            <input required type="text" name="PhoneNumber" maxlength="15" value="<?= $this->showValue('PhoneNumber') ?>">
        </div>
               <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Email') ?>><?= $create_Email ?></label>
            <input required type="email" name="Email" maxlength="40" value="<?= $this->showValue('Email') ?>">
        </div>

        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Address') ?>><?= $create_Address ?></label>
            <input required type="text" name="Address" value="<?= $this->showValue('Address') ?>">
        </div>

        <div class="input_wrapper_other padding n20 select">
            <label <?= $create_GroupName ?>></label>
            <select required name="GroupId" >
                <option>  <?= $create_GroupName ?> </option>
                <?php if (false !== $ClintGroups): foreach ($ClintGroups as $ClintGroup): ?>
                    <option value="<?= $ClintGroup->GroupId ?>"> <?= $ClintGroup->GroupName ?></option>
                <?php endforeach;endif; ?>
            </select>
                  </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('VatNo') ?>><?= $create_VatNo ?></label>
            <input required type="text" name="VatNo" value="<?= $this->showValue('VatNo') ?>">
        </div>

        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Segl') ?>><?= $create_Segl ?></label>
            <input required type="text" name="Segl" value="<?= $this->showValue('Segl') ?>">
        </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('DaysDue') ?>><?= $create_DaysDue ?></label>
            <input required type="text" name="DaysDue" value="<?= $this->showValue('DaysDue') ?>">
        </div>

        <input class="no_float" type="submit" name="submit" value="<?= $create_save ?>">
    </fieldset>
</form>