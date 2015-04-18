<!doctype html>
<html lang="en">
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!--Pulling Awesome Font -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<meta charset="UTF-8">
	<title>Desafío Entel</title>
	<style>

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
			background-color:#fff;
		  -webkit-font-smoothing: antialiased;
		  font: normal 14px Roboto,arial,sans-serif;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}

		@import url(http://fonts.googleapis.com/css?family=Roboto:400);

		.container {
		    padding: 25px;
		    position: fixed;
		}

		.form-login {
		    background-color: #EDEDED;
		    padding-top: 10px;
		    padding-bottom: 20px;
		    padding-left: 20px;
		    padding-right: 20px;
		    border-radius: 15px;
		    border-color:#d2d2d2;
		    border-width: 5px;
		    box-shadow:0 1px 0 #cfcfcf;
		}

		h4 { 
		 border:0 solid #fff; 
		 border-bottom-width:1px;
		 padding-bottom:10px;
		 text-align: center;
		}

		.form-control {
		    border-radius: 10px;
		}

		.wrapper {
		    text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-md-offset-5 col-md-3">
	            <div class="form-login">
	            <h4>Bienvenido</h4>
	            <input type="text" id="email" class="form-control input-sm chat-input" placeholder="correo" />
	            </br>
	            <input type="text" id="password" class="form-control input-sm chat-input" placeholder="contraseña" />
	            </br>
	            <div class="wrapper">
	            <span class="group-btn">     
	                <a href="#" class="btn btn-primary btn-md">Entrar <i class="fa fa-sign-in"></i></a>
	            </span>
	            </div>
	            </div>
	        
	        </div>
	    </div>
	</div>
	<div class="welcome">
		<a href="#" title="Proyecto Entel">
		<img src="http://logok.org/wp-content/uploads/2014/10/Entel-logo.png" height="200" width="300" alt="Laravel PHP Framework"></a>
		<h1>Desafío Entel.</h1>
		<h2>Centro de Innovación UC</h2>
	</div>
</body>
</html>
