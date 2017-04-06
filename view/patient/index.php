<h1>Hospital</h1>
    <ul>
        <li><a href="patients.html">Patiënts</a></li>
        <li><a href="clients.html">Clients</a></li>
        <li><a href="species.html">Species</a></li>
    </ul>

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
                <td><?= $patient['name'] ?></td>
                <td><?= $patient['species_id'] ?></td>
                <td><?= $patient['status'] ?></td>
                <td><?= $patient['clients_id'] ?></td>
                <td class="center"><a href="#">edit</a></td>
                <td class="center"><a href="#">delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
        <p><a href="#">Create</a></p>
        <p><a href="index.html">Home</a></p>