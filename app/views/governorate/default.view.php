<?php

use PHPMVC\Models\CountryModel;

?>
<div class="container">
    <a href="/governorate/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>
    <table class="data">
        <thead>
        <tr>
            <th><?= $default_GovernorateId ?></th>
            <th><?= $default_GovernorateName ?></th>
            <th><?= $default_GovernorateNameEng ?></th>
            <th><?= $default_CountryName ?></th>
            <th><?= $default_Nots ?></th>
            <th><?= $default_control ?></th>
        </tr>
        </thead>
        <tbody>
        <?php if(false !== $Governorate): foreach ($Governorate as $governorate): ?>
            <tr>
                <td><?= $governorate->GovernorateId ?></td>
                <td><?= $governorate->GovernorateName ?></td>
                <td><?= $governorate->GovernorateNameEng ?></td>

                <td>
                <select  disabled  name="CountryId"   id="CountryId">
                    <option><?=  $default_CountryName ?></option>
                    <?php if (false !== $Country): foreach ($Country as $country): ?>
                        <option value="<?= $country->CountryId ?>"<?= $this->selectedIf('CountryId',$country->CountryId,$governorate) ?>><?= $country->CountryName ?></option>
                    <?php endforeach;endif; ?>
                </select>
                </td>
                <td><?= $governorate->Nots ?></td>
             <td>
                    <a href="/governorate/edit/<?= $governorate->GovernorateId ?>"><i class="fa fa-edit"></i></a>
                    <a href="/governorate/delete/<?= $governorate->GovernorateId?>" onclick="if(!confirm('<?= $default_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>