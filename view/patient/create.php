<div class="container">
	<h1>Toevoegen</h1>
	<div class="row">
		<form class="col s12" action="<?= URL ?>birthday/createSave" method="post">
			<div class="input-field col s6">
	          <input id="name" type="text" name="name">
	          <label for="name">Naam</label>
	        </div>
	        <div class="input-field col s6">
	          <input id="surname" type="text" name="surname">
	          <label for="surname">Achternaam</label>
	        </div>
	        <div class="input-field col s12">  
				<input type="date" placeholder="jjjj-mm-dd" class="datepicker" name="date">
			</div>
			<div class="input-field col s12">
				<textarea id="description" class="materialize-textarea" name="description" maxlength="500" data-length="500"></textarea>
				<label for="description">Beschrijving</label>
			</div>
			<input class="waves-effect waves-light btn" type="submit" value="Toevoegen">
			<a class="waves-effect waves-light btn grey" href="<?= URL ?>birthday/index">Annuleer</a>
		</form>
</div>