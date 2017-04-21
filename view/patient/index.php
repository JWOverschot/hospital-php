    <h2>Patiënts</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Species</th>
                <th>Status</th>
                <th>Client</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($patient as $patient) { ?>
            <tr>
                <td><?= $patient['patient_name']; ?></td>
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