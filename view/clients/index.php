    <h2>Clients</h2>
    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Phone</th>
                <th>Email</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($clients as $client) { ?>
            <tr>
                <td><?= $client['clients_firstname'] ?></td>
                <td><?= $client['clients_lastname'] ?></td>
                <td><?= $client['clients_phone'] ?></td>
                <td><?= $client['clients_email'] ?></td>
                <td><a href="#">edit</a></td>
                <td><a class="btn waves-effect waves-light red" href="<?= URL ?>clients/delete/<?= $client['clients_id'] ?>">Verwijder
                <i class="material-icons right">delete</i></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
        <p><a href="#">Create</a></p>