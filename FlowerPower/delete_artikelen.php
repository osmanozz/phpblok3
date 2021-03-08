<?php
   include_once "database.php";
   $db = new database();

if(isset($_GET['id'])) {

    $artikelcode=$_GET['id'];

    $sql = "DELETE FROM artikel WHERE artikelcode=:code";

    $id = $_POST['artikelid'];

        $placeholder = [
            'code'=> $artikelcode
        ];

        $db->delete($sql, $placeholder, "overzicht_artikelen.php");
    }
