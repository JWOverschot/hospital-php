    <h2>Patiënts</h2>
    <table>
        <thead>
            <tr>
                <?php
                    $sort = null;
                    //arrow up = &#x25B2
                    //arrow down = &#x25BC
                    $arrowName = null;
                    $arrowGender = null;
                    $arrowSpecies = null;
                    $arrowStatus = null;
                    $arrowClient = null;
                    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    if (strpos($actual_link, '?') !== false) {
                        $sort = true;
                        if ($sort == true) {
                            $sort = 'asc';
                        }
                        else {
                            $sort = 'desc';
                        }
                        

                        if ($_GET['sort'] == 'name_asc') {
                            $arrowName = "&#x25B2";
                        }
                        elseif ($_GET['sort'] == 'name_desc') {
                            $arrowName = "&#x25BC";
                        }

                        if ($_GET['sort'] == 'gender_asc') {
                            $arrowGender = "&#x25B2";
                        }
                        elseif ($_GET['sort'] == 'gender_desc') {
                            $arrowGender = "&#x25BC";
                        }

                        if ($_GET['sort'] == 'species_asc') {
                            $arrowSpecies = "&#x25B2";
                        }
                        elseif ($_GET['sort'] == 'species_desc') {
                            $arrowSpecies = "&#x25BC";
                        }

                        if ($_GET['sort'] == 'status_asc') {
                            $arrowStatus = "&#x25B2";
                        }
                        elseif ($_GET['sort'] == 'status_desc') {
                            $arrowStatus = "&#x25BC";
                        }

                        if ($_GET['sort'] == 'clients_asc') {
                            $arrowClient = "&#x25B2";
                        }
                        elseif ($_GET['sort'] == 'clients_desc') {
                            $arrowClient = "&#x25BC";
                        }
                    }

                ?>
                <th id="name"><a  href="<?= URL ?>patient/index?sort=name_asc">Name<?= $arrowName ?></a></th>
                <th id="gender"><a href="<?= URL ?>patient/index?sort=gender_asc">Gender<?= $arrowGender ?></a></th>
                <th id="species"><a href="<?= URL ?>patient/index?sort=species_asc">Species<?= $arrowSpecies ?></a></th>
                <th id="status"><a href="<?= URL ?>patient/index?sort=status_asc">Status<?= $arrowStatus ?></a></th>
                <th id="clients"><a href="<?= URL ?>patient/index?sort=clients_asc">Client<?= $arrowClient ?></a></th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($patient as $patient) { ?>
            <tr>
                <td><?= $patient['patient_name']; ?></td>
                <td><?= $patient['patient_gender']; ?></td>
                <td><?= $patient['species_description']; ?></td>
                <td><?= $patient['patient_status']; ?></td>
                <td><a href="<?= URL ?>client/info/<?= $patient['clients_id'] ?>"><?= $patient['clients_firstname']; ?> <?= $patient['clients_lastname']; ?></a></td>
                <td><a class="btn-floating waves-effect waves-light blue" href="<?= URL ?>patient/edit/<?= $patient['patient_id'] ?>"><i class="material-icons">mode_edit</i></a></td>
                <td><a class="btn-floating waves-effect waves-light red" href="<?= URL ?>patient/delete/<?= $patient['patient_id']; ?>"><i class="material-icons">delete</i></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
        <a class="btn-floating waves-effect waves-light green accent-3" href="<?= URL ?>patient/create"><i class="material-icons">add</i></a>