<div class="container">
	<h1>Toevoegen</h1>
		<form class="col s12" action="<?= URL ?>specie/createSave" method="post">
			<div class="input-field col s6">
	          <input type="text" name="description">
	          <label for="description">Description</label>
	        </div>
			<input class="waves-effect waves-light btn" type="submit" value="Toevoegen">
			<a class="waves-effect waves-light btn grey" href="<?= URL ?>specie/index">Annuleer</a>
		</form>
</div>