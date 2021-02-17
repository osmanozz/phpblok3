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
     
    if(isset($_POST['submit'])) {

        $id = $_POST['artikelid'];
        $artikel = $_POST['artikel'];
        $prijs = $_POST['prijs'];

        $query = "UPDATE artikel SET artikel=:artikel, prijs=:prijs where 'artikelid'=:artikelid";

        $stmt = $connect->prepare($query);

        
            $stmt->execute(
                array(
                $artikel => $_POST['artikel'],
                $prijs => $_POST['prijs']
            ));
            echo $stmt->rowCount() . 'record updated';
        }
     

?>

<form action="edit_artikel.php" method="post">
                <!-- doorgaan met setten van value met ternary operator -->
        <input type="hidden" name="artikelid" value="<?php echo $_GET['artikelid'] ?>>">
        <input type="text" name="artikel" placeholder="artikel">
        <input type="text" name="prijs" placeholder="prijs">
        <input type="submit" value="Wijzig">
    </form>


 

</body>
</html>