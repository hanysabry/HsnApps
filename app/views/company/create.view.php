<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $title ?></legend>
        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('NameCompany') ?>><?= $text_Name_Company ?></label>
            <input required type="text" name="NameCompany" maxlength="40" value="<?= $this->showValue('NameCompany') ?>">
        </div>

        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('UserId') ?>><?= $text_UserId ?></label>
                <input required type="number" name="UserId"  value="<?= $this->showValue('UserId') ?>">
        </div>

        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Address1') ?>><?= $text_Address1 ?></label>
                <input required type="text" name="Address1" value="<?= $this->showValue('Address1') ?>">
        </div>

        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Address2') ?>><?= $text_Address2 ?></label>
                <input required type="text" name="Address2" value="<?= $this->showValue('Address2') ?>">
        </div>

        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Address3') ?>><?= $text_Address3 ?></label>
                <input required type="text" name="Address3" value="<?= $this->showValue('Address3') ?>">
        </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Email1') ?>><?= $text_Email1 ?></label>
            <input required type="email" name="Email1" maxlength="40" value="<?= $this->showValue('Email1') ?>">
        </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Email2') ?>><?= $text_Email2 ?></label>
                <input required type="email" name="Email2" maxlength="40" value="<?= $this->showValue('Email2') ?>">
        </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Email3') ?>><?= $text_Email3 ?></label>
                <input required type="email" name="Email3" maxlength="40" value="<?= $this->showValue('Email3') ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('PhoneNumber1') ?>><?= $text_MOBIL1 ?></label>
            <input required type="text" name="PhoneNumber1" maxlength="15" value="<?= $this->showValue('PhoneNumber1') ?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('PhoneNumber2') ?>><?= $text_MOBIL2 ?></label>
                <input required type="text" name="PhoneNumber2" maxlength="15" value="<?= $this->showValue('PhoneNumber2') ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('PhoneNumber3') ?>><?= $text_MOBIL3 ?></label>
                <input required type="text" name="PhoneNumber3" maxlength="15" value="<?= $this->showValue('PhoneNumber3') ?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('SEGEL') ?>><?= $text_SEGEL ?></label>
                <input required type="text" name="SEGEL" maxlength="15" value="<?= $this->showValue('SEGEL') ?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('VatNo') ?>><?= $text_VatNo ?></label>
                <input required type="text" name="VatNo" maxlength="15" value="<?= $this->showValue('VatNo') ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('Facebook') ?>><?= $text_Facebook ?></label>
                <input required type="text" name="Facebook" maxlength="15" value="<?= $this->showValue('Facebook') ?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('Twitter') ?>><?= $text_Twitter ?></label>
                <input required type="text" name="Twitter" maxlength="15" value="<?= $this->showValue('Twitter') ?>">
        </div>


        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('Instgram') ?>><?= $text_Instgram ?></label>
                <input required type="text" name="Instgram" maxlength="15" value="<?= $this->showValue('Instgram') ?>">
        </div>


        <div class="input_wrapper n50 border">
           <label<?= $this->labelFloat('snap') ?>><?= $text_snap ?></label>
          <input required type="text" name="snap" maxlength="15" value="<?= $this->showValue('snap') ?>">
        </div>



        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>