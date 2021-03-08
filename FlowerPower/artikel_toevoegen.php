<?php
include_once "database.php";
$db = new database();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $artikel_id = $_POST['artikelid'];
    $artikel_name = $_POST['artikelnaam'];
    $artikel_prijs = $_POST['prijs'];

    $sql = "INSERT INTO artikel VALUES (:artikelid, :artikelnaam, :prijs);";

    $placeholeder = [
        'artikelcode'=>$artikel_id,
        'artikel'=>$artikel_name,
        'prijs'=>$artikel_prijs
    ];

    $db->add($sql, $placeholeders, "overzicht_artikelen.php");

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<form action="artikel_toevoegen.php" method="POST">
<input type="hidden" name="artikelid"
>
    <div class="input-group">
		<label>ARTIKEL</label>
		<input type="text" name="artikelnaam">
	</div>
	<div class="input-group">
		<label>PRIJS</label>
		<input type="text" name="prijs">
	</div>
    <div class="input-group">
		<button type="submit" name="send_btn">Toevoegen</button>
	</div>
	

</form>
</head>
</html>




