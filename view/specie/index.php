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
                <td><a href="<?= URL ?>specie/edit/<?= $specie['species_id']; ?>">edit</a></td>
                <td><a class="btn waves-effect waves-light red" href="<?= URL ?>specie/delete/<?= $specie['species_id']; ?>">Verwijder
                <i class="material-icons right">delete</i></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
        <p><a href="<?= URL ?>specie/create">Create</a></p>