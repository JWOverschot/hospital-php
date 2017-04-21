<div class="container">
	<h1>Toevoegen</h1>
		<form class="col s12" action="<?= URL ?>client/createSave" method="post">
			<div class="input-field col s6">
	          <input id="name" type="text" name="firstname">
	          <label for="firstname">Firstname</label>
	        </div>
	        <div class="input-field col s6">
	          <input id="name" type="text" name="lastname">
	          <label for="lastname">Lastname</label>
	        </div>
	        <div class="input-field col s6">
	          <input id="tel" type="tel" name="phone" maxlength="10" class="validate">
	          <label for="lastname">Phone Number</label>
	        </div>
	        <div class="input-field col s6">
	          <input id="email" type="email" name="email" class="validate">
	          <label for="lastname">Email</label>
	        </div>
			<input class="waves-effect waves-light btn" type="submit" value="Toevoegen">
			<a class="waves-effect waves-light btn grey" href="<?= URL ?>client/index">Annuleer</a>
		</form>
</div>