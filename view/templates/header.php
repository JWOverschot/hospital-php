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
      <h1>Hospital</h1>
      <ul>
        <li><a href="<?= URL . 'patient/index' ?>">Patiënts</a></li>
        <li><a href="<?= URL . 'clients/index' ?>">Clients</a></li>
        <li><a href="<?= URL . 'species/index' ?>">Species</a></li>
      </ul>
