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
                <td><?= $patient['patient_name'] ?></td>
                <td><?= $patient['species_description'] ?></td>
                <td><?= $patient['patient_status'] ?></td>
                <td><a href="#"><?= $patient['clients_firstname'] ?> <?= $patient['clients_lastname'] ?></a></td>
                <td class="center"><a href="#">edit</a></td>
                <td class="center"><a href="#">delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
        <p><a href="#">Create</a></p>