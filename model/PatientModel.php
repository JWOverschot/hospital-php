<?php
function getPatient($id) {
	// $db = openDatabaseConnection();
	// $sql = "SELECT * FROM patient WHERE patient_id = :id";
	// $query = $db->prepare($sql);
	// $query->execute(array(
	// 	":id" => $id));
	// $db = null;
	// return $query->fetch();

	$db = openDatabaseConnection();
	$sql = "SELECT patient.patient_id, patient.patient_name, patient.patient_status, species.species_description, clients.clients_firstname, clients.clients_lastname, patient.clients_id, patient.species_id
			FROM patient
			INNER JOIN species ON patient.species_id = species.species_id
			INNER JOIN clients ON patient.clients_id = clients.clients_id
			WHERE patient.patient_id = :id";
	$query = $db->prepare($sql);
		$query->execute(array(
		":id" => $id));
	$db = null;

	return $query->fetch();
}

function getSpecie($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species WHERE species_id = :id";
	$query = $db->prepare($sql);
		$query->execute(array(
		":id" => $id));
	$db = null;

	return $query->fetch();
}

function getClient($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients WHERE clients_id = :id";
	$query = $db->prepare($sql);
		$query->execute(array(
		":id" => $id));
	$db = null;

	return $query->fetch();
}

function getAllPatient() {
	$db = openDatabaseConnection();
	$sql = "SELECT patient.patient_id, patient.clients_id, patient.patient_name, patient.patient_status, species.species_description, clients.clients_firstname, clients.clients_lastname
			FROM patient
			INNER JOIN species ON patient.species_id = species.species_id
			INNER JOIN clients ON patient.clients_id = clients.clients_id";
	$query = $db->prepare($sql);
		$query->execute();
	$db = null;

	return $query->fetchAll();
}

function getSpecies() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
		$query->execute();
	$db = null;

	return $query->fetchAll();
}

function getClients() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
		$query->execute();
	$db = null;

	return $query->fetchAll();
}

function editPatient() {
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null;
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	$clients = isset($_POST['clients']) ? $_POST['clients'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($name) == 0 || strlen($status) == 0 || strlen($species) == 0 || strlen($clients) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "UPDATE patient SET patient_name = :name, patient_status = :status, species_id = :species, clients_id = :clients WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':status' => $status,
		':species' => $species,
		':clients' => $clients,
		':id' => $id
		));
	$db = null;
	
	return true;
}

function deletePatient($id = null) {
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "DELETE FROM patient WHERE patient_id = :id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;
	
	return true;
}

function createPatient() {
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null;
	$clients = isset($_POST['clients']) ? $_POST['clients'] : null;
	
	if (strlen($name) == 0 || strlen($species) == 0 || strlen($status) == 0 || strlen($clients) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "INSERT INTO patient(patient_name, species_id, patient_status, clients_id) VALUES (:name, :species, :status, :clients)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':status' => $status,
		':clients' => $clients));
	$db = null;
	
	return true;
}