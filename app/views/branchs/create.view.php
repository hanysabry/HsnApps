<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $title ?></legend>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('NameBranch') ?>><?= $text_NameBranch ?></label>
            <input required type="text" name="NameBranch" maxlength="40" value="<?= $this->showValue('NameBranch') ?>">
        </div>

        <div class="input_wrapper_other padding n20 select">
            <label <?=  $text_Name_Company ?>></label>
            <select required name="CompanyId" >
                <option>  <?= $text_Name_Company ?> </option>
                <?php if (false !== $Company): foreach ($Company as $Companys): ?>
                    <option value="<?= $Companys->CompanyId ?>"> <?= $Companys->NameCompany ?></option>
                <?php endforeach;endif; ?>
            </select>
        </div>


        <div class="input_wrapper_other padding n20 select">
            <label <?=  $text_UserId  ?>></label>
            <select required name="CompanyId" >
                <option>  <?= $text_UserId  ?> </option>
                <?php if (false !== $users): foreach ($users as $user): ?>
                    <option value="<?= $user->UserId ?>"> <?= $user->Username ?></option>
                <?php endforeach;endif; ?>
            </select>
        </div>




        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Address1') ?>><?= $text_Address1 ?></label>
                <input required type="text" name="Address1" value="<?= $this->showValue('Address1') ?>">
        </div>




        <div class="input_wrapper n50 padding">
            <label<?= $this->labelFloat('Email1') ?>><?= $text_Email1 ?></label>
            <input required type="email" name="Email1" maxlength="40" value="<?= $this->showValue('Email1') ?>">
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