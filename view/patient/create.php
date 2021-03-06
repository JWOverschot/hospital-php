<div class="container">
	<h1>Toevoegen</h1>
		<form class="col s12" action="<?= URL ?>patient/createSave" method="post">
			<div class="input-field col s6">
	        	<input id="name" type="text" name="name">
	        	<label for="name">Name</label>
	        </div>
	        <div class="input-field col s6">
		        <p>
	        		<input type="radio" name="gender" value="male" id="male"> 
	        		<label for="male">Male</label>
	    		</p>
	    		<p>
					<input type="radio" name="gender" value="female" id="female">
					<label for="female">Female</label>
				</p>
				<p>
					<input type="radio" name="gender" value="other" id="other">
					<label for="other">Other</label>
				</p><br>
  			</div>
         	<div class="input-field col s6">
				<select name="species">
					<option disabled selected>Kies een dier</option>
					<?php foreach ($species as $specie) { ?>
						<option value="<?= $specie['species_id']; ?>"><?= $specie['species_description']; ?></option>
					<?php } ?>
				</select>
				<label>Species</label>
			</div>
			<div class="input-field col s6">
				<textarea id="status" class="materialize-textarea" name="status" maxlength="500" data-length="500"></textarea>
				<label for="status">Status</label>
			</div>
			<div class="input-field col s6">
				<select name="clients">
					<option disabled selected>Kies een client</option>
					<?php foreach ($clients as $client) { ?>
						<option value="<?= $client['clients_id']; ?>"><?= $client['clients_firstname']; ?> <?= $client['clients_lastname']; ?></option>
					<?php } ?>
				</select>
				<label>Clients</label>
			</div>
			<input class="waves-effect waves-light btn" type="submit" value="Toevoegen">
			<a class="waves-effect waves-light btn grey" href="<?= URL ?>patient/index">Annuleer</a>
		</form>
</div>