<html>
	<head>
		<title>OWN Entel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 50;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<a href="{{ URL::to('/user/logout'); }}">
			<img src="http://proyectoentel.herokuapp.com/img/own-logo.png" height="30" width="80" />
			</a>
			<div class="content">
				<div class="title">Recibimos tu orden de carcaza</div>
				<div class="quote">Tu carcaza ya ha sido ingresada a producción. Te avisaremos cuando ya se encuentre lista para su entrega.</div>
			</div>
		</div>
	</body>
</html>
