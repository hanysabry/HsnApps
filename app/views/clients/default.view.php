<div class="container">
    <a href="/clients/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>
    <table class="data">
        <thead>
            <tr>
                <th><?= $default_ClientId ?></th>
                <th><?= $default_Clientname ?></th>
                <th><?= $default_ClientnameEng ?></th>
                <th><?= $default_ClientNameCompany ?></th>
                <th><?= $default_AssistantaccountName ?></th>
                <th><?= $default_CountryName ?></th>
                <th><?= $default_GovernorateName ?></th>
                <th><?= $default_CityName ?></th>
                <th><?= $default_Address ?></th>



                <th><?= $default_email ?></th>
                <th><?= $default_phone_number ?></th>
                <th><?= $default_Address ?></th>
                <th><?= $default_GroupName ?></th>
                <th><?= $default_VatNo ?></th>
                <th><?= $default_DaysDue ?></th>
                <th><?= $default_Segl ?></th>
                <th><?= $default_control ?></th>
            </tr>
        </thead>
        <tbody>
        <?php if(false !== $clients): foreach ($clients as $client): ?>
            <tr>
                <td><?= $client->ClientId ?></td>
                <td><?= $client->ClientName ?></td>
                <td><?= $client->ClientNameEng ?></td>
                <td><?= $client->ClientNameCompany ?></td>
                <td>
                    <select  disabled  name="AssistantaccountId"   id=" AssistantaccountId">
                        <option><?=  $default_AssistantaccountName ?></option>
                        <?php if (false !== $Assistantaccount): foreach ($Assistantaccount as $assistantaccount): ?>
                            <option value="<?= $assistantaccount->AssistantaccountId ?>"<?= $this->selectedIf('AssistantaccountId',$assistantaccount->AssistantaccountId,$client) ?>><?= $assistantaccount->AssistantaccountName ?></option>
                        <?php endforeach;endif; ?>
                    </select>
                </td>

                <td>
                <select  disabled  name="CountryId"   id="CountryId">
                    <option><?=  $default_CountryName ?></option>
                    <?php if (false !== $Country): foreach ($Country as $country): ?>
                        <option value="<?= $country->CountryId ?>"<?= $this->selectedIf('CountryId',$country->CountryId,$client) ?>><?= $country->CountryName ?></option>
                    <?php endforeach;endif; ?>
                </select>
                </td>

                <td>
                <select  disabled  name="GovernorateId"   id="GovernorateId">
                    <option><?=  $default_GovernorateName ?></option>
                    <?php if (false !== $Governorate): foreach ($Governorate as $governorate): ?>
                        <option value="<?= $governorate->GovernorateId ?>"<?= $this->selectedIf('GovernorateId',$governorate->GovernorateId,$client) ?>><?= $governorate->GovernorateName ?></option>
                    <?php endforeach;endif; ?>
                </select>
                </td>

                <td>
                <select  disabled  name="CityId"   id="CityId">
                    <option><?=  $default_CityName ?></option>
                    <?php if (false !== $City): foreach ($City as $city): ?>
                        <option value="<?= $city->CityId ?>"<?= $this->selectedIf('CityId',$city->CityId,$client) ?>><?= $city->CityName ?></option>
                    <?php endforeach;endif; ?>
                </select>
                </td>


                 <td><?= $client->Email ?></td>
                <td><?= $client->PhoneNumber1 ?></td>
                <td><?= $client->Address ?></td>

                <td>
                    <select  disabled  name="GroupId"   id=" GroupId">
                        <option><?=  $default_GroupName ?></option>
                        <?php if (false !== $ClintGroups): foreach ($ClintGroups as $ClintGroup): ?>
                            <option value="<?= $ClintGroup->GroupId ?>"<?= $this->selectedIf('GroupId',$ClintGroup->GroupId,$client) ?>><?= $ClintGroup->GroupName ?></option>
                         <?php endforeach;endif; ?>
                    </select>
                </td>

                <td><?= $client->VatNo ?></td>
                <td><?= $client->DaysDue ?></td>
                <td><?= $client->Segl ?></td>
                <td>
                    <a href="/clients/edit/<?= $client->ClientId ?>"><i class="fa fa-edit"></i></a>
                    <a href="/clients/delete/<?= $client->ClientId ?>" onclick="if(!confirm('<?= $default_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>