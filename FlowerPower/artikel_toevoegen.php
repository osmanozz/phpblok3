<?php
include_once "database.php";
$db = new database();

if(isset($_POST['submit'])) {

    $artikel_name = $_POST['artikelnaam'];
    $artikel_prijs = $_POST['prijs'];

    $sql = "INSERT INTO artikel (artikel, prijs) VALUES (:artikelnaam, :prijs);";

    $placeholeders = [
        'artikelnaam'=>$artikel_name,
        'prijs'=>$artikel_prijs
    ];
    $db->add($sql, $placeholeders, "overzicht_artikelen.php");

}

?>


<!DOCTYPE html>
<html lang="en">
<head>

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
                            <input type="submit" name="submit"></input>
                        </div>

                <style>

            input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }

            input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            input[type=submit]:hover {
            background-color: #45a049;
            }

            </style>

                    </form>
</head>
</html>




