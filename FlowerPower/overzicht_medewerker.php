<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <li><a href="overzicht_artikelen.php"><span class="glyphicon glyphicon-log-in"></span> Overzicht artikelen</a></li>
      <li class="active" ><a href="overzicht_medewerker.php"><span class="glyphicon glyphicon-log-in"></span> Overzicht Medewerker</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Lijst bestellingen</a></li>
      <br>
      <li><a href="#"><strong> Ingelogd als medewerker</strong> </a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Uitloggen</a></li>
    </ul>
  </div>
</nav>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Naam</th>
      <th scope="col">Email</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td> </td>
      <td></td>
    </tr>
    <tr>
     
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

</body>
</html>

