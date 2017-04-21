<?php
require(ROOT . "model/SpecieModel.php");
function index()
{
	render("specie/index", array(
		'species' => getAllSpecies()
	));
}
function create()
{
	render("specie/create");
}
function createSave()
{
	if (!createSpecie()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "specie/index");
}
function edit($id)
{
	render("specie/edit", array(
		'specie' => getSpecie($id)
	));
}
function editSave()
{
	if (!editSpecie()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "specie/index");
} 
function delete($id)
{
	if (!deleteSpecie($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "specie/index");
}