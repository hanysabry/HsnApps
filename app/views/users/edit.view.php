<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend><?= $text_legend ?></legend>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('FirstName', $userprofile) ?>><?= $text_label_FirstName ?></label>
                <input required type="text" name="FirstName" maxlength="30" value="<?= $this->showValue('FirstName', $userprofile) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('LastName', $userprofile) ?>><?= $text_label_LastName ?></label>
                <input required type="text" name="LastName" maxlength="30" value="<?= $this->showValue('LastName', $userprofile) ?>">
        </div>


        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('Username', $user) ?>><?= $text_label_Username ?></label>
                <input required type="text" name="Username" maxlength="30" value="<?= $this->showValue('Username', $user) ?>">
        </div>

        <div class="input_wrapper n50 border">
            <label<?= $this->labelFloat('Email',$user) ?>><?= $text_label_Email ?></label>
                <input required type="email" name="Email" maxlength="40" value="<?= $this->showValue('Email',$user) ?>">
        </div>

        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('PhoneNumber', $user) ?>><?= $text_label_PhoneNumber ?></label>
            <input required type="text" name="PhoneNumber" value="<?= $this->showValue('PhoneNumber', $user) ?>">
        </div>
        <div class="input_wrapper n50 padding border">
            <label<?= $this->labelFloat('Password', $user) ?>><?= $text_label_Password ?></label>
                <input required type="text" name="Password" value="<?= $this->showValue('Password', $user) ?>">
        </div>



        <div class="input_wrapper_other padding n50 select">
            <select required name="GroupId">
                <option value=""><?= $text_user_GroupId ?></option>
                <?php if (false !== $groups): foreach ($groups as $group): ?>
                    <option value="<?= $group->GroupId ?>" <?= $this->selectedIf('GroupId', $group->GroupId, $user) ?>><?= $group->GroupName ?></option>
                <?php endforeach;endif; ?>
            </select>
        </div>

            <div class="input_wrapper_other padding n50 select">
            <select required name="Status" id="Status">
                <option value=""><?= $text_label_status ?></option>
                <option value="1" <?= $user->Status == 1 ? 'selected' : '' ?>><?= $text_label_type_Active ?></option>
                <option value="2" <?= $user->Status == 2 ? 'selected' : '' ?>><?= $text_label_type_NotActive ?></option>
            </select>



                  <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>