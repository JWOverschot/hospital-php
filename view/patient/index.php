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
                <td><a href="<?= URL ?>client/index/<?= $patient['clients_id'] ?>"><?= $patient['clients_firstname']; ?> <?= $patient['clients_lastname']; ?></a></td>
                <td><a href="<?= URL ?>patient/edit/<?= $patient['patient_id'] ?>">edit</a></td>
                <td><a class="btn waves-effect waves-light red" href="<?= URL ?>patient/delete/<?= $patient['patient_id']; ?>">Verwijder
                <i class="material-icons right">delete</i></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
        <p><a href="<?= URL ?>patient/create">Create</a></p>