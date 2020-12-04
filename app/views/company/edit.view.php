<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $title ?></legend>
        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('NameCompany',$company) ?>><?= $text_Name_Company ?></label>
                <input required type="text" name="NameCompany" maxlength="40" value="<?= $this->showValue('NameCompany', $company) ?>">
        </div>

        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('UserId', $company) ?>><?= $text_UserId ?></label>
                <input required type="number" name="UserId" maxlength="40" value="<?= $this->showValue('UserId', $company) ?>">
        </div>

        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Address1', $company) ?>><?= $text_Address1 ?></label>
                <input required type="text" name="Address1" value="<?= $this->showValue('Address1', $company) ?>">
        </div>

        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Address2', $company) ?>><?= $text_Address2 ?></label>
                <input required type="text" name="Address2" value="<?= $this->showValue('Address2', $company) ?>">
        </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Address3', $company) ?>><?= $text_Address3 ?></label>
                <input required type="text" name="Address3" value="<?= $this->showValue('Address2', $company) ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('PhoneNumber1', $company) ?>><?= $text_MOBIL1 ?></label>
                <input required type="text" name="PhoneNumber1" maxlength="15" value="<?= $this->showValue('PhoneNumber1', $company) ?>">
        </div>
        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('PhoneNumber2', $company) ?>><?= $text_MOBIL2 ?></label>
                <input required type="text" name="PhoneNumber2" maxlength="15" value="<?= $this->showValue('PhoneNumber2', $company) ?>">
        </div>
        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('PhoneNumber3', $company) ?>><?= $text_MOBIL3 ?></label>
                <input required type="text" name="PhoneNumber3" maxlength="15" value="<?= $this->showValue('PhoneNumber3', $company) ?>">
        </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Email1', $company) ?>><?= $text_Email1 ?></label>
                <input required type="email" name="Email1" maxlength="40" value="<?= $this->showValue('Email1', $company) ?>">
        </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Email2', $company) ?>><?= $text_Email2 ?></label>
                <input required type="email" name="Email2" maxlength="40" value="<?= $this->showValue('Email2', $company) ?>">
        </div>


        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Email3', $company) ?>><?= $text_Email3 ?></label>
                <input required type="email" name="Email3" maxlength="40" value="<?= $this->showValue('Email3', $company) ?>">
        </div>



        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('SEGEL', $company) ?>><?= $text_SEGEL ?></label>
                <input required type="text" name="SEGEL" maxlength="15" value="<?= $this->showValue('SEGEL', $company) ?>">
        </div>
        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('VatNo', $company) ?>><?= $text_VatNo ?></label>
                <input required type="text" name="VatNo" maxlength="15" value="<?= $this->showValue('VatNo', $company) ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('Facebook', $company) ?>><?= $text_Facebook ?></label>
                <input required type="text" name="Facebook" maxlength="15" value="<?= $this->showValue('Facebook', $company) ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('Twitter', $company) ?>><?= $text_Twitter ?></label>
                <input required type="text" name="Twitter" maxlength="15" value="<?= $this->showValue('Twitter', $company) ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('Instgram', $company) ?>><?= $text_Instgram ?></label>
                <input required type="text" name="Instgram" maxlength="15" value="<?= $this->showValue('Instgram', $company) ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('Snap', $company) ?>><?= $text_Snap ?></label>
                <input required type="text" name="Snap" maxlength="15" value="<?= $this->showValue('Snap', $company) ?>">
        </div>



        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>