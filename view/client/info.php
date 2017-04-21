    <h2>Client</h2>
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
            <tr>
                <td><?= $client['clients_firstname']; ?></td>
                <td><?= $client['clients_lastname']; ?></td>
                <td><a href="tel:<?= $client['clients_phone']; ?>"><?= $client['clients_phone']; ?></a></td>
                <td><a href="mailto:<?= $client['clients_email']; ?>" target="_top"><?= $client['clients_email']; ?></a></td>
                <td><a class="btn-floating waves-effect waves-light blue" href="<?= URL ?>client/edit/<?= $client['clients_id']; ?>"><i class="material-icons">mode_edit</i></a></td>
                <td><a class="btn-floating waves-effect waves-light red" href="<?= URL ?>client/delete/<?= $client['clients_id']; ?>"><i class="material-icons">delete</i></a></td>
            </tr>
        </tbody>
    </table>