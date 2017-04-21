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
                <td><?= $client['clients_firstname']; ?></td>
                <td><?= $client['clients_lastname']; ?></td>
                <td><a href="tel:<?= $client['clients_phone']; ?>"><?= $client['clients_phone']; ?></a></td>
                <td><a href="mailto:<?= $client['clients_email']; ?>" target="_top"><?= $client['clients_email']; ?></a></td>
                <td><a href="<?= URL ?>client/edit/<?= $client['clients_id']; ?>">edit</a></td>
                <td><a class="btn waves-effect waves-light red" href="<?= URL ?>client/delete/<?= $client['clients_id']; ?>">Verwijder
                <i class="material-icons right">delete</i></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
        <p><a href="<?= URL ?>client/create">Create</a></p>