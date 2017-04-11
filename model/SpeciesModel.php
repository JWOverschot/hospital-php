<?php
function getSpecies($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species WHERE species_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));
	$db = null;
	return $query->fetch();
}
function getAllSpecies() {
	$db = openDatabaseConnection();
	$sql = "SELECT *
			FROM species";
	$query = $db->prepare($sql);
		$query->execute();
	$db = null;

	return $query->fetchAll();
}
function editSpecies() {
	
}
function deleteSpecie($id) {
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "DELETE FROM species WHERE species_id = :id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;
	
	return true;
}
function createSpecies() {
	
}