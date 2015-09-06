<html>
<head>
	<title><?= $title ?> </title>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>plantilla/css/home.css">
</head>
<body>
	<div align="center">
		<h1><?= $mensajeInicio ?></h1>
		<p><?= $info ?></p>
		<a href="<?= base_url()?>Link">Link</a>
		<button class="btn btn-primary">aceptar</button>
	</div>
</body>
</html>