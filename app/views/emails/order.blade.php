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
				<div class="title">Nueva orden de Carcaza</div>
				<div class="quote">{{ HTML::link('admin', 'Ir al panel de control') }}</div>
				<table>
				<tbody>
					<tr>
					<th>
						Usuario
					</th>
					<td>
						{{ $user }}
					</td>
					</tr>
					<tr>
					<th>
						Email
					</th>
					<td>
						{{ $email }}
					</td>
					</tr>
					<tr>
					<th>
						Step One
					</th>
					<td>
						{{ $paso_uno }}
					</td>
					</tr>
					<tr>
					<th>
						Option
					</th>
					<td>
						{{ $option_name }}
					</td>
					</tr>
					<tr>
					<th>
						Color
					</th>
					<td>
						{{ $option_color }}
					</td>
					</tr>
					<tr>
					<th>
						Address
					</th>
					<td>
						{{ $address }}
					</td>
					</tr>
				</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
