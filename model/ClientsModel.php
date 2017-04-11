<?php
function getClients($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients WHERE clients_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));
	$db = null;
	return $query->fetch();
}
function getAllClients() {
	$db = openDatabaseConnection();
	$sql = "SELECT *
			FROM clients";
	$query = $db->prepare($sql);
		$query->execute();
	$db = null;

	return $query->fetchAll();
}
function editClients() {
	
}
function deleteClients($id) {
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "DELETE FROM clients WHERE clients_id = :id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;
	
	return true;
}
function createClients() {
	
}