<?php
function getPatient($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patient WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));
	$db = null;
	return $query->fetch();
}
function getAllPatient() {
	$db = openDatabaseConnection();
	$sql = "SELECT patient.patient_id, patient.patient_name, species.species_description, patient.patient_status, clients.clients_firstname, clients.clients_lastname
			FROM patient
			INNER JOIN species ON patient.species_id = species.species_id
			INNER JOIN clients ON patient.clients_id = clients.clients_id";
	$query = $db->prepare($sql);
		$query->execute();
	$db = null;

	return $query->fetchAll();
}
function editPatient() {
	
}
function deletePatient($id) {
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "DELETE FROM patient WHERE id = :id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;
	
	return true;
}
function createPatient() {
	
}