<?php
function getPatient($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patient WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));
	$db = null;
	return $query->fetch();
}

function getAllPatient() {
	$db = openDatabaseConnection();
	$sql = "SELECT patient.patient_id, patient.patient_name, species.species_id, species.species_description, patient.patient_status, clients.clients_id, clients.clients_firstname, clients.clients_lastname
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
	$sql = "INSERT INTO patient(patinet_name, species_id, patient_status, clients_id) VALUES (:name, :species, :status, :clients)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':status' => $status,
		':clients' => $clients));
	$db = null;
	
	return true;
}