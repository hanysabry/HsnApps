<form autocomplete="off" class="appForm clearfix" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend><?= $text_legend ?></legend>

        <div class="input_wrapper n100">
            <label<?= $this->labelFloat('StorecategoryName') ?>><?= $create_StorecategoryName ?></label>
            <input required type="text" name="StorecategoryName" id="StorecategoryName"   value="<?= $this->showValue('StorecategoryName') ?>">
        </div>

        <div class="input_wrapper n100">
            <label<?= $this->labelFloat('StorecategoryNameEng') ?>><?= $create_StorecategoryNameEng ?></label>
            <input required type="text" name="StorecategoryNameEng" id="StorecategoryNameEng"   value="<?= $this->showValue('StorecategoryNameEng') ?>">
        </div>


        <div class="input_wrapper n100">
            <label<?= $this->labelFloat('City') ?>><?= $create_City ?></label>
            <input required type="text" name="City" id="City"   value="<?= $this->showValue('City') ?>">
        </div>
        <div class="input_wrapper n100">
            <label<?= $this->labelFloat('StorecategoryManager') ?>><?= $create_StorecategoryManager ?></label>
            <input required type="text" name="StorecategoryManager" id="StorecategoryManager"   value="<?= $this->showValue('StorecategoryManager') ?>">
        </div>
        <div class="input_wrapper n100">
            <label<?= $this->labelFloat('PhoneNumber') ?>><?= $create_PhoneNumber ?></label>
            <input required type="text" name="PhoneNumber" id="PhoneNumber"   value="<?= $this->showValue('PhoneNumber') ?>">
        </div>
        <div class="input_wrapper n100">
            <label<?= $this->labelFloat('Email') ?>><?= $create_Email ?></label>
            <input required type="text" name="Email" id="Email"   value="<?= $this->showValue('Email') ?>">
        </div>

        <div class="input_wrapper n100">
            <label<?= $this->labelFloat('Nots') ?>><?= $create_Nots ?></label>
            <input required type="text" name="Nots" id="Nots"   value="<?= $this->showValue('Nots') ?>">
        </div>


        <div class="input_wrapper n100">
            <label<?= $this->labelFloat('Nots') ?>><?= $create_Nots ?></label>
            <input required type="text" name="Nots" id="Nots"   value="<?= $this->showValue('Nots') ?>">
        </div>

        <div class="input_wrapper n100">
            <label<?= $this->labelFloat('MainaccountId') ?>><?= $create_MainaccountId ?></label>
            <input required type="text" name="MainaccountId" id="MainaccountId"   value="<?= $this->showValue('MainaccountId') ?>">
        </div>



        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>