<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<title>Registration system PHP and MySQL</title>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">FlowerPower</a>
      <img src="boeket2.jpg" style="width:100px;height:80px">
    </div>
    <ul class="nav navbar-nav navbar-center">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="registreren.php"><span class="glyphicon glyphicon-user"></span> Registreren</a></li>
      <li><a href="loginCustomer.php"><span class="glyphicon glyphicon-log-in"></span> Inloggen Als Klant</a></li>
      <li><a href="loginEmployee.php"><span class="glyphicon glyphicon-log-in"></span> Inloggen Medewerker</a></li>
    </ul>
  </div>
</nav>

<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="registreren.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Heeft u al een account? <a href="loginCustomer.php">Log in</a>
	</p>
</form>
</body>
</html>

<?php
include "database.php";

    if(isset($_POST["submit"])) {
        $melding="";
        $gebruikersnaam = htmlspecialchars($_POST['email']);
        $wachtwoord = $_POST['wachtwoord'];
        $wachtwoordHash = password_hash($wachtwoord, PASSWORD_DEFAULT);


        $sql = "select * from klant where gebruikersnaam=?";
        $stmt = $verbinding->prepare($sql);
        $stmt->execute(array($gebruikersnaam));
        $resultaat = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($resultaat) {
                echo "email is in gebruik";
            } else {
                $sql = "insert into klant (gebruikersnaam, wachtwoord) 
                values (?,?)";
                $stmt = $verbinding->prepare($sql);
                try {
                    $stmt->execute(array(
                        $gebruikersnaam,
                        $wachtwoordHash
                    ));
                    $melding = "account aangemaakt";
                } 
                catch(PDOExpection $e) {
                    $melding = "niet gelukt" . $e->getMessage();
                }
                echo $melding;
            }
    }



?>
