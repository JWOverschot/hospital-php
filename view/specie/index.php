    <h2>Species</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Description</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($species as $specie) { ?>
            <tr>
                <td><?= $specie['species_id']; ?></td>
                <td><?= $specie['species_description']; ?></td>
                <td><a class="btn-floating waves-effect waves-light blue" href="<?= URL ?>specie/edit/<?= $specie['species_id']; ?>"><i class="material-icons">mode_edit</i></a></td>
                <td><a class="btn-floating waves-effect waves-light red" href="<?= URL ?>specie/delete/<?= $specie['species_id']; ?>"><i class="material-icons">delete</i></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
        <a class="btn-floating waves-effect waves-light green accent-3" href="<?= URL ?>specie/create"><i class="material-icons">add</i></a>