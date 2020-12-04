<?php

use PHPMVC\Models\CountryModel;

?>
<div class="container">
    <a href="/city/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>
    <table class="data">
        <thead>
        <tr>
            <th><?= $text_table_CityId ?></th>
            <th><?= $text_table_CityName ?></th>
            <th><?= $text_table_CityNameEng ?></th>
            <th><?= $text_table_CountryName ?></th>
            <th><?= $text_table_GovernorateName ?></th>
             <th><?= $text_table_Nots ?></th>
        </tr>
        </thead>
        <tbody>
        <?php if(false !== $city): foreach ($city as $city): ?>
            <tr>
                <td><?= $city->CityId ?></td>
                <td><?= $city->CityName ?></td>
                <td><?= $city->CityNameEng ?></td>
                 <td>
                    <select  disabled  name="CountryId"   id="CountryId">
                        <option><?=  $text_table_CountryName ?></option>
                        <?php if (false !== $Country): foreach ($Country as $country): ?>
                            <option value="<?= $country->CountryId ?>"<?= $this->selectedIf('CountryId',$country->CountryId,$city) ?>><?= $country->CountryName ?></option>
                        <?php endforeach;endif; ?>
                    </select>
                </td>

                <td>
                    <select  disabled  name="GovernorateId"   id="GovernorateId">
                        <option><?=  $text_table_GovernorateName ?></option>
                        <?php if (false !== $governorate): foreach ($governorate as $governorates): ?>
                            <option value="<?= $governorates->GovernorateId ?>"<?= $this->selectedIf('GovernorateId',$governorates->GovernorateId,$city) ?>><?= $governorates->GovernorateName ?></option>
                        <?php endforeach;endif; ?>
                    </select>
                </td>
                <td><?= $city->Nots ?></td>
             <td>
                    <a href="/city/edit/<?= $city->CityId ?>"><i class="fa fa-edit"></i></a>
                    <a href="/city/delete/<?= $city->CityId ?>" onclick="if(!confirm('<?= $text_table_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>