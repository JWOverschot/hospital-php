<!doctype html>
<html>
	<head>
		<title>Hospital</title>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?= URL . 'public/css/materialize.min.css' ?>" media="screen,projection">
    <!-- Import style.css -->
    <link type="text/css" rel="stylesheet" href="<?= URL . 'public/css/style.css' ?>">
    <!--Let browser know website is optimized for mobile-->
  	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="<?= URL . 'public/img/hospital-fav.png' ?>" type="image/png" sizes="24x24">
	</head>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?= URL . 'public/js/materialize.min.js' ?>"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          $('select').material_select();
        });
      </script>
      <nav>
        <div class="nav-wrapper red darken-3">
        <a href="<?= URL . 'patient/index' ?>" class="brand-logo center">Hospital</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="<?= URL . 'patient/index' ?>">Patiënts</a></li>
          <li><a href="<?= URL . 'client/index' ?>">Clients</a></li>
          <li><a href="<?= URL . 'specie/index' ?>">Species</a></li>
        </ul>
        </div>
      </nav>
<div class="container">