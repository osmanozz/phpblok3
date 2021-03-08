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

<?php  
        include 'database.php';
        $db = new database();

        $artikelen = $db->select("SELECT * FROM artikel", []);

        $columns = array_keys($artikelen[0]);
        $row_data = array_values($artikelen);
    ?>
        <a href="artikel_toevoegen.php">Artikel Toevoegen</a>

        <table>
            <tr>
                <?php
                    foreach($columns as $column){
                        echo "<td><strong>$column</strong></td>";
                    }
                ?>

                <th colspan="2">Action</th>
                </tr>
                  

            <?php
                foreach($row_data as $rows){
                    $artikel_code = $rows['artikelcode'];
                    echo "<tr>";
                    foreach($rows as $data){
                        echo "<td>$data</td>";
                    }
                    echo "<td>";
                    echo "<a href=edit_artikel.php?id=$artikel_code>Edit</a>";
                    echo "<a href=delete_artikelen.php?id=$artikel_code>Delete</a>";
                    echo "</td>";
                    echo "<tr>";
              
                }
       ?>
        </table>
       

</body>
</html>

