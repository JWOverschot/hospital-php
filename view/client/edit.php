<div class="container">
	<h1>Wijzigen</h1>
		<form class="col s12" action="<?= URL ?>client/editSave" method="post">
			<div class="input-field col s6">
	          <input id="name" type="text" name="firstname" value="<?= $client['clients_firstname']; ?>">
	          <label for="firstname">Firstname</label>
	        </div>
	        <div class="input-field col s6">
	          <input id="name" type="text" name="lastname" value="<?= $client['clients_lastname']; ?>">
	          <label for="lastname">Lastname</label>
	        </div>
	        <div class="input-field col s6">
	          <input id="tel" type="tel" name="phone" maxlength="10" class="validate" value="<?= $client['clients_phone']; ?>">
	          <label for="lastname">Phone Number</label>
	        </div>
	        <div class="input-field col s6">
	          <input id="email" type="email" name="email" class="validate" value="<?= $client['clients_email']; ?>">
	          <label for="lastname">Email</label>
	        </div>
			<input type="hidden" name="id" value="<?= $client['clients_id']; ?>">
            <input class="waves-effect waves-light btn" type="submit" value="Bijwerken">
            <a class="btn waves-effect waves-light red" href="<?= URL ?>client/delete/<?= $client['clients_id'] ?>">Verwijder
                <i class="material-icons right">delete</i>
            </a>
            <a class="waves-effect waves-light btn grey" href="<?= URL ?>client/index">Annuleer</a>
		</form>
</div>