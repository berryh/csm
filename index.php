<?php ?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale=1.0" />
		<title>Combi Service Meeuwes - Home</title>
		<link rel="stylesheet" href="css/bootstrap-slate.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.css" />
	</head>
	<body>

		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-th-list"></span> </a>
					<a href="#" class="brand">Combi Service Meeuwes</a>
					<div class="nav-collapse collapse">
						<ul class="nav pull-right">
							<li class="active">
								<a href="index.php">Home</a>
							</li>
							<li >
								<a href="projecten.php">Projecten</a>
							</li>
							<li>
								<a href="fotoreportage.php">Fotoreportage</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="hero-unit">
			<h1>Combi Service Meeuwes<img align="right" src="./img/Logo.png" width=320/></h1>
			<br />
			<br />
			<br />
		</div>

		<div class="container">
			
			<div class="row-fluid">
				<div class="span6" align="center">
					<h4>Over Ons</h4>
					<p>
						Hier komt wat over ons.
					</p>
				</div>
				<div class="span6" align="center">
					<h4>Contact</h4>
					<h5>
						Telefoon: 06 - 236 764 93<br />
						Mail: ???
					</h5>
					<br />
					<form name="htmlform" method="post" action="form.php">
						<table width="450px">
							</tr>
							<tr>
								<td valign="top"><label for="first_name">Voornaam *</label></td>
								<td valign="top">
								<input  type="text" name="first_name" maxlength="50" size="30" id="formulier">
								</td>
							</tr>

							<tr>
								<td valign="top"">
								<label for="last_name">Achternaam *</label>
								</td>
								<td valign="top">
								<input  type="text" name="last_name" maxlength="50" size="30" id="formulier">
								</td>
								</tr>
								<tr>
								<td valign="top">
								<label for="email">Email Adres *</label>
								</td>
								<td valign="top">
								<input  type="text" name="email" maxlength="80" size="30" id="formulier">
								</td>

								</tr>
								<tr>
								<td valign="top">
								<label for="telephone">Telefoon Nummer</label>
								</td>
								<td valign="top">
								<input  type="text" name="telephone" maxlength="30" size="30" id="formulier">
								</td>
								</tr>
								<tr>
								<td valign="top">
								<label for="comments">Opmerkingen *</label>
								</td>
								<td valign="top">
								<textarea  name="comments" maxlength="1000" cols="25" rows="6" id="formulier"></textarea>
								</td>

								</tr>
								<tr>
								<td colspan="2" style="text-align:center">
								<label for="sumbit">Velden met * zijn verplicht.</label>
								<input type="submit" value="Verstuur" id="formulier">
								</td>
							</tr>
						</table>
					</form>
					<br />
					
				</div>
			</div>
		</div>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>

	</body>

</html>