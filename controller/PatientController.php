<?php
require(ROOT . "model/PatientModel.php");
function index()
{
	render("patient/index", array(
		'patient' => getAllPatient()
	));
}
function create()
{
	render("patient/create", array(
		'species' => getSpecies(),
		'clients' => getClients()
	));
}
function createSave()
{
	if (!createPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "patient/index");
}
function edit($id)
{
	render("patient/edit", array(
		'patient' => getPatient($id),
		'species' => getSpecies(),
		'clients' => getClients()
	));
}
function editSave()
{
	if (!editPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "patient/index");
} 
function delete($id)
{
	if (!deletePatient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "patient/index");
}