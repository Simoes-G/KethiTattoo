<!DOCTYPE html>
<html lang="en">

<head>
	<title>Mostudio - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../css/animate.css">

	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">


	<link rel="stylesheet" href="../css/flaticon.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/registro.css">

	<style>
		body {
			width: 100vw;
			height: 100vh;
		}

		.registro {
			width: 92%;
			height: 92%;
		}

		.div-registro {
			padding: 30px;
			width: 60%;
			height: 60%;
			color: white;
			border-radius: 10px;
		}
		input{
			border: none;
			outline: none;
			border-radius: 4px;
			height: 35px;
			padding-left: 10px;
			transition: 0.5s;
		}
		input:focus{
			width: 90%;
			background-color: rgb(17, 0, 19);
			color: white;
			transition: 0.4s;
		}
		

	</style>
</head>

<body class="">

	<nav class="navbar navbar-expand-lg bg-primary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">KethiTattoo</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link active" aria-current="page" href="#">Registrar</a>
					<a class="nav-link" href="#">Editar</a>
					<a class="nav-link disabled" aria-disabled="true">Outros</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="registro d-flex justify-content-center align-items-center">
		<form action="#" class="d-flex bg-primary flex-column div-registro" method="post">
			<label for="titulo">Nome:</label>
			<input type="text" name="titulo" id="titulo">

			<label for="descricao">Descricao:</label>
			<input type="text" name="descricao" id="descricao">

			<label for="preco">Preco:</label>
			<input type="text" name="preco" id="preco">

			<label for="tamanho">Tamanho:</label>
			<input type="text" name="tamanho" id="tamanho">

			<label for="tamanho">Estilo:</label>
			<input type="text" name="tamanho" id="tamanho">

			<label for="foto">Foto:</label>
			<input type="file" name="foto" id="foto">
		</form>

	</div>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


	<script src="../js/jquery.min.js"></script>
	<script src="../js/jquery-migrate-3.0.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script src="../js/jquery.waypoints.min.js"></script>
	<script src="../js/jquery.stellar.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/jquery.animateNumber.min.js"></script>
	<script src="../js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="../js/google-map.js"></script>
	<script src="../js/main.js"></script>

</body>

</html>