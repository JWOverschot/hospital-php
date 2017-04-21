<div class="container">
	<h1>Toevoegen</h1>
		<form class="col s12" action="<?= URL ?>patient/createSave" method="post">
			<div class="input-field col s6">
	        	<input id="name" type="text" name="name">
	        	<label for="name">Name</label>
	        </div>
			<select class="browser-default" name="species">
				<option disabled selected>Kiez een dier</option>
				<?php foreach ($species as $specie) { ?>
					<option value="<?= $specie['species_id']; ?>"><?= $specie['species_description']; ?></option>
				<?php } ?>
			</select>
			<label>Species</label>
			<div class="input-field col s12">
				<textarea id="status" class="materialize-textarea" name="status" maxlength="500" data-length="500"></textarea>
				<label for="status">Status</label>
			</div>
			<select class="browser-default" name="clients">
				<option disabled selected>Kiez een client</option>
				<?php foreach ($clients as $client) { ?>
					<option value="<?= $client['clients_id']; ?>"><?= $client['clients_firstname']; ?> <?= $client['clients_lastname']; ?></option>
				<?php } ?>
			</select>
			<label>Clients</label>

			<input class="waves-effect waves-light btn" type="submit" value="Toevoegen">
			<a class="waves-effect waves-light btn grey" href="<?= URL ?>patient/index">Annuleer</a>
		</form>
</div>