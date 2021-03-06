    <h2>Patiënts</h2>
    <table>
        <thead>
            <tr>
                <?php
                    if (isset($_GET['sort'])) {
                        $sort = $_GET['sort'];
                    } else {
                        $sort = 'desc';
                    }
                    //arrow up = &#x25B2
                    //arrow down = &#x25BC
                    $arrowName = null;
                    $arrowGender = null;
                    $arrowSpecies = null;
                    $arrowStatus = null;
                    $arrowClient = null;
                    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    if (strpos($actual_link, '?') !== false) {
                        if ($_GET['order'] == 'name' && $_GET['sort'] == 'asc') {
                            $arrowName = "&#x25B2";
                        }
                        elseif ($_GET['order'] == 'name' && $_GET['sort'] == 'desc') {
                            $arrowName = "&#x25BC";
                        }

                        if ($_GET['order'] == 'gender' && $_GET['sort'] == 'asc') {
                            $arrowGender = "&#x25B2";
                        }
                        elseif ($_GET['order'] == 'gender' && $_GET['sort'] == 'desc') {
                            $arrowGender = "&#x25BC";
                        }

                        if ($_GET['order'] == 'species' && $_GET['sort'] == 'asc') {
                            $arrowSpecies = "&#x25B2";
                        }
                        elseif ($_GET['order'] == 'species' && $_GET['sort'] == 'desc') {
                            $arrowSpecies = "&#x25BC";
                        }

                        if ($_GET['order'] == 'status' && $_GET['sort'] == 'asc') {
                            $arrowStatus = "&#x25B2";
                        }
                        elseif ($_GET['order'] == 'status' && $_GET['sort'] == 'desc') {
                            $arrowStatus = "&#x25BC";
                        }

                        if ($_GET['order'] == 'clients' && $_GET['sort'] == 'asc') {
                            $arrowClient = "&#x25B2";
                        }
                        elseif ($_GET['order'] == 'clients' && $_GET['sort'] == 'desc') {
                            $arrowClient = "&#x25BC";
                        }
                    }
                    $sort == 'desc' ? $sort = 'asc' : $sort = 'desc';
                ?>
                <th id="name"><a  href="<?= URL ?>patient/index?order=name&&sort=<?= $sort ?>">Name<?= $arrowName ?></a></th>
                <th id="gender"><a href="<?= URL ?>patient/index?order=gender&&sort=<?= $sort ?>">Gender<?= $arrowGender ?></a></th>
                <th id="species"><a href="<?= URL ?>patient/index?order=species&&sort=<?= $sort ?>">Species<?= $arrowSpecies ?></a></th>
                <th id="status"><a href="<?= URL ?>patient/index?order=status&&sort=<?= $sort ?>">Status<?= $arrowStatus ?></a></th>
                <th id="clients"><a href="<?= URL ?>patient/index?order=clients&&sort=<?= $sort ?>">Client<?= $arrowClient ?></a></th>
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