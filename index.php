<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Acorduri | Târgul Liceelor Timișene #2022</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<div class="wrapper">
		<div class="image-holder">
			<img src="images/bg.jpg" alt="">
		</div>
		<div class="form-inner">
			<form action="makepdf.php" method="post">
				<div class="form-header">
					<h3>Acord Parental - Marea lansare - 24 Feb.</h3><br>
					<img src="images/sign-up.png" alt="" class="sign-up-icon">
				</div>
				<div class="form-group">
					<label for="">Nume și prenume părinte/tutore legal:</label>
					<input type="text" class="form-control" id="nume" name="nume" required>
				</div>
				<div class="form-group">
					<label for="">Nr. tel părinte/tutore legal:</label>
					<input type="text" class="form-control" id="tel" name="tel" required>
				</div>
				<div class="form-group">
					<label for="">E-mail părinte/tutore legal:</label>
					<input type="text" class="form-control" data-validation="email" id="email" name="email" required>
				</div>
				<hr><br>
				<div class="form-group">
					<label for="">Nume și prenume elev:</label>
					<input type="text" class="form-control" id="nume_minor" name="nume_minor" required>
				</div>
				<div class="form-group">
					<label for="">Nr. tel elev:</label>
					<input type="text" class="form-control" id="tel_minor" name="tel_minor" required>
				</div>
				<div class="form-group">
					<label for="">E-mail elev:</label>
					<input type="text" class="form-control" data-validation="email" id="email_minor" name="email_minor" required>
				</div>
				<button>Generează acordul!</button>
			</form>
		</div>

	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.form-validator.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>