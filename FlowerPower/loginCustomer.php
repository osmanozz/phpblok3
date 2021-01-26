<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Registreren</a></li>
      <li class="active"><a href="loginCustomer.php"><span class="glyphicon glyphicon-log-in"></span> Inloggen Als Klant</a></li>
      <li><a href="loginEmployee.php"><span class="glyphicon glyphicon-log-in"></span> Inloggen Medewerker</a></li>
    </ul>
  </div>
</nav>

<div class="position-absolute top-40 end-50">
<form>
<div class="badge bg-primary text-wrap" style="width: 20rem;">
Inloggen als klant
</div>
  <div class="form-group">
  <div class="col-30">
  <br>
  <br>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter email">
  </div>
  </div>
  <div class="form-group">
  <div class="col-30">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" required placeholder="Password">
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>