<?php
   include_once "database.php";
   $db = new database();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['artikelid'];
    $artikel = $_POST['artikel'];
        $prijs = $_POST['prijs'];

    $sql = "DELETE FROM artikel WHERE artikelcode=:artikelid";

    $id = $_POST['artikelid'];
        $placeholder = [
            'artikel'=> $artikel,
            'prijs'=> $prijs, 
            'artikelid'=>$id
        ];

        $db->delete($sql, $placeholders, "overzicht_artikelen.php");
    }
