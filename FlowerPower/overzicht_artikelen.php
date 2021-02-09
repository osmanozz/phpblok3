<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link rel="stylesheet" href="styleoverzicht.css">
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
      <li class=""><a href="index.php">Home</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li class="active"><a href="overzicht_artikelen.php"><span class="glyphicon glyphicon-log-in"></span> Overzicht artikelen</a></li>
      <li ><a href="overzicht_medewerker.php"><span class="glyphicon glyphicon-log-in"></span> Overzicht Medewerker</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Lijst bestellingen</a></li>
      <br>
      <li><a href="#"><strong> Ingelogd als medewerker</strong> </a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Uitloggen</a></li>
    </ul>
    </ul>
  </div>
</nav>



<table class="table">OVERZICHT ARTIKELEN
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

</body>
</html>

