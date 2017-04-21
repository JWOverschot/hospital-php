<div class="container">
	<h1>Wijzigen</h1>
		<form class="col s12" action="<?= URL ?>specie/editSave" method="post">
			<div class="input-field col s6">
	          <input type="text" name="description" value="<?= $specie['species_description']; ?>">
	          <label for="description">Description</label>
	        </div>
	        <input type="hidden" name="id" value="<?= $specie['species_id']; ?>">
			<input class="waves-effect waves-light btn" type="submit" value="Wijzigen">
			<a class="btn waves-effect waves-light red" href="<?= URL ?>specie/delete/<?= $specie['species_id'] ?>">Verwijder
                <i class="material-icons right">delete</i>
            </a>
			<a class="waves-effect waves-light btn grey" href="<?= URL ?>specie/index">Annuleer</a>
		</form>
</div>