<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylelogin1.css">
    <!-- CSS only -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">FlowerPower</a>
      <img src="boeket2.jpg" style="width:100px;height:80px">
    </div>
    <ul class="nav navbar-nav navbar-center">
      <li><a href="index.php">Home</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="registreren.php"><span class="glyphicon glyphicon-user"></span> Registreren</a></li>
      <li><a href="loginCustomer.php"><span class="glyphicon glyphicon-log-in"></span> Inloggen Als Klant</a></li>
      <li class="active"><a href="loginEmployee.php"><span class="glyphicon glyphicon-log-in"></span> Inloggen Medewerker</a></li>
    </ul>
  </div>
</nav>

<div class="header">
	<h2>Inloggen Medewerker</h2>
</div>
<form method="post" action="registreren.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="">
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Inloggen</button>
	</div>
	<p>
		Niet aangemeld? <a href="registreren.php">Registreren</a>
	</p>
</form>

</body>
</html>