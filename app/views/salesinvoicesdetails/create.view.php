<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">

    <div>
        <fieldset>
            <legend><?= $text_legend1 ?></legend>

            <div class="input_wrapper n20 border padding">
                <label  <?= $this->labelFloat('CreatedAtDate') ?> <?= $create_CreatedAtDate ?> ></label>
                <input type="date"  name="CreatedAtDate" value="<?php echo date('Y-m-d'); ?>" />
            </div>

            <div class="input_wrapper n20 border padding">
                <label<?= $this->labelFloat('StoreId') ?>><?= $create_StoreId ?></label>
                <input required type="text" name="StoreId" value="<?= $this->showValue('StoreId') ?>">
            </div>

            <div class="input_wrapper_other padding n20 select">
                <?= $create_PaymentType ?>
                <select required name="PaymentType" >
                    <?php if (false !== $PaymentType): foreach ($PaymentType as $PaymentTypes): ?>
                        <option value=<?= $PaymentTypes->Id ?>><?= $PaymentTypes->Name ?> </option>
                    <?php endforeach;endif; ?>
                </select>
            </div>





            <div class="input_wrapper_other padding n20 select">
                <?= $create_PaymentType ?>
                <select required name="PaymentType" >
                    <?php if (false !== $PaymentType): foreach ($PaymentType as $PaymentTypes): ?>
                        <option value=<?= $PaymentTypes->Id ?>><?= $PaymentTypes->Name ?> </option>
                    <?php endforeach;endif; ?>
                </select>
            </div>

            <div class="input_wrapper_other padding n20 select">
                <?= $create_AssistantaccountId ?>
                <select required name="AssistantaccountId" <?= $create_AssistantaccountId ?>>
                    <?php if (false !== $Assistantaccount): foreach ($Assistantaccount as $assistantaccount): ?>
                        <option value=<?= $assistantaccount->AssistantaccountId ?>><?= $assistantaccount->AssistantaccountName ?> </option>
                    <?php endforeach;endif; ?>
                </select>
            </div>

            <div class="input_wrapper_other padding n20 select">
                <?= $create_Clint ?>
                <select required name="PaymentType" <?= $create_Clint ?>>
                    <?php if (false !== $Clint): foreach ($Clint as $clint): ?>
                        <option value=<?= $clint->ClientId ?>><?= $clint->ClientName ?> </option>
                    <?php endforeach;endif; ?>
                </select>
            </div>


            <div class="input_wrapper_other padding n20 select">
                <?= $create_GroupId ?>
                <select required name="GroupId" <?= $create_GroupId ?>>
                    <?php if (false !== $ClintGroups): foreach ($ClintGroups as $group): ?>
                        <option value=<?= $group->GroupId ?>><?=  $group->GroupName ?> </option>
                    <?php endforeach;endif; ?>
                </select>
            </div>


            <div class="input_wrapper n20 border padding">
                <label<?= $this->labelFloat('Address') ?>><?= $create_Address ?></label>
                <input required type="text" name="Address" value="<?= $this->showValue('Address') ?>">
            </div>




            <div class="input_wrapper n20 border padding">
                <label<?= $this->labelFloat('PhoneNumber1') ?>><?= $create_PhoneNumber1 ?></label>
                <input required type="text" name="PhoneNumber1" value="<?= $this->showValue('PhoneNumber1') ?>">
            </div>




            <div class="input_wrapper n20 border padding">
                <label<?= $this->labelFloat('Nots') ?>><?= $create_Nots ?></label>
                <input required type="text" name="Nots" value="<?= $this->showValue('Nots') ?>">
            </div>


            <div class="input_wrapper n20 border padding">
                <label<?= $this->labelFloat('VatNo') ?>><?= $create_VatNo ?></label>
                <input required type="text" name="VatNo" value="<?= $this->showValue('VatNo') ?>">
            </div>


            <div class="input_wrapper n20 border padding">
                <label<?= $this->labelFloat('Segl') ?>><?= $create_Segl ?></label>
                <input required type="text" name="Segl" value="<?= $this->showValue('Segl') ?>">
            </div>




    </div>


<br><br/>

  <div>
   <fieldset>
        <legend><?= $text_legend2 ?></legend>


       <div class="input_wrapper_other padding n20 select">
           <?= $create_ProductName ?>
           <select required name="GroupId" <?= $create_GroupId ?>>
               <?php if (false !== $Productlist): foreach ($Productlist as $productlist): ?>
                   <option value=<?= $productlist->ProductId ?>><?=  $productlist->Name ?> </option>
               <?php endforeach;endif; ?>
           </select>
       </div>

        <div class="input_wrapper n20 border padding">
            <label<?= $this->labelFloat('Quantity') ?>><?= $create_Quantity ?></label>
            <input required type="text" name="Quantity" value="<?= $this->showValue('Quantity') ?>">
        </div>



        <div class="input_wrapper n20 border padding">
            <label<?= $this->labelFloat('UnitName') ?>><?= $create_UnitName ?></label>
            <input required type="text" name="UnitName" value="<?= $this->showValue('UnitName') ?>">
        </div>




        <div class="input_wrapper n20 border padding">
            <label<?= $this->labelFloat('Discount') ?>><?= $create_Discount ?></label>
            <input required type="text" name="Discount" value="<?= $this->showValue('Discount') ?>">
        </div>



        <div class="input_wrapper n20 border padding">
            <label<?= $this->labelFloat('PercentDiscount') ?>><?= $create_PercentDiscount ?></label>
            <input required type="text" name="PercentDiscount" value="<?= $this->showValue('PercentDiscount') ?>">
        </div>


        <div class="input_wrapper n20 border padding">
            <label<?= $this->labelFloat('AmountDiscount') ?>><?= $create_AmountDiscount ?></label>
            <input required type="text" name="AmountDiscount" value="<?= $this->showValue('AmountDiscount') ?>">
        </div>



        <div class="input_wrapper n20 border padding">
            <label<?= $this->labelFloat('NetPriceTotal') ?>><?= $create_NetPriceTotal ?></label>
            <input required type="text" name="NetPriceTotal" value="<?= $this->showValue('NetPriceTotal') ?>">
        </div>



        <div class="input_wrapper n20 border padding">
            <label<?= $this->labelFloat('UnitName') ?>><?= $create_UnitName ?></label>
            <input required type="text" name="UnitName" value="<?= $this->showValue('UnitName') ?>">
        </div>

  </div>


        <input class="no_float" type="submit" name="submit" value="<?= $text_label_save ?>">
    </fieldset>
</form>