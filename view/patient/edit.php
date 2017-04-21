<div class="container">
<h1>Wijzig</h1>
    <form class="col s12" action="<?= URL ?>patient/editSave" method="post">
        <div class="input-field col s6">
            <input id="name" type="text" name="name" value="<?= $patient['patient_name']; ?>">
            <label for="name">Name</label>
        </div>
        <div class="input-field col s6">
            <select name="species">
                <?php foreach ($species as $specie) { ?>
                    <?php 
                        if ($patient['species_id'] == $specie['species_id'])
                        {
                            $selected = "selected";
                        } else
                        {
                            $selected = null;
                        }
                    ?>
                    <option <?= $selected ?> value="<?= $specie['species_id']; ?>"><?= $specie['species_description']; ?></option>
                <?php } ?>
            </select>
            <label>Species</label>
        </div>
        <div class="input-field col s6">
            <textarea id="status" class="materialize-textarea" name="status" maxlength="500" data-length="500"><?= $patient['patient_status']; ?></textarea>
            <label for="status">Status</label>
        </div>
        <div class="input-field col s6">
            <select name="clients">
                <?php foreach ($clients as $client) { ?>
                    <?php 
                        if ($patient['clients_id'] == $client['clients_id'])
                        {
                            $selected = "selected";
                        } else
                        {
                            $selected = null;
                        }
                    ?>
                    <option <?= $selected ?> value="<?= $client['clients_id']; ?>"><?= $client['clients_firstname']; ?> <?= $client['clients_lastname']; ?></option>
                <?php } ?>
            </select>
            <label>Clients</label>
        </div>
        <input type="hidden" name="id" value="<?= $patient['patient_id']; ?>">
        <input class="waves-effect waves-light btn" type="submit" value="Bijwerken">
        <a class="btn waves-effect waves-light red" href="<?= URL ?>patient/delete/<?= $patient['patient_id'] ?>">Verwijder
            <i class="material-icons right">delete</i>
        </a>
        <a class="waves-effect waves-light btn grey" href="<?= URL ?>patient/index">Annuleer</a>
    </form>