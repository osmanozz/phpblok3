<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

    include_once "database.php";
    $db = new database();
    if(isset($_GET['id'])){
        $artikel = $db->select('SELECT * FROM artikel WHERE artikelcode=:id', ['id'=>$_GET['id']]);
        $artikelnaam = $artikel[0]['artikel'];
        $artikelprijs = $artikel[0]['prijs'];

    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id = $_POST['artikelid'];
        $artikel = $_POST['artikel'];
        $prijs = $_POST['prijs'];

        // echo "id is $id, artikel is $artikel, prijs is $prijs";

        $sql = "UPDATE artikel SET artikel=:artikel, prijs=:prijs WHERE artikelcode=:artikelid";

        $placeholders = [
            'artikel'=> $artikel,
            'prijs'=> $prijs, 
            'artikelid'=>$id
        ];

        $db->update($sql, $placeholders, 'overzicht_artikelen.php');

        }
     
   
?>

<form action="edit_artikel.php" method="post">
                <!-- doorgaan met setten van value met ternary operator -->
        <input type="hidden" name="artikelid" value="<?php echo $_GET['id'] ?>">
        <input type="text" name="artikel" placeholder="<?php echo isset($artikelnaam) ? $artikelnaam : 'artikel' ?>">
        <input type="text" name="prijs" placeholder="<?php echo isset($artikelprijs) ? $artikelprijs : 'prijs' ?>">
        <input type="submit" name="submit" value="Wijzig">
    </form>


 

</body>
</html>